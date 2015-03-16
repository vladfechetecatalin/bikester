var post = {
	init: function () {
		this.initEvents();
		this.initCharCount();

		$('[data-toggle="tooltip"]').tooltip();
	},

	initEvents: function () {
		var self = this;

		$('body').on('change', '.post-bike-page .make-selector', function () {
			var makeId = $(this).val();
			$('.model-option').remove();

			if ($(this).val()) {
				makeId = $(this).val();

				$.ajax({
					url: '/posteaza/motocicleta/' + makeId,
					type: 'GET',
					dataType: 'json',
				})
				.done(function(response) {
					$('.model-selector').removeAttr('disabled');

					$.each(response.models, function(index, val) {
						$('.model-selector').append('<option value="' + val.id + '" class="model-option">' + val.name + '</option>');
					});
				})
				.fail(function() {
					// console.log("error");
				})
				.always(function() {
					// console.log("complete");
				});
			}
		});

		$('body').on('click', '.uploaded-images .image-placeholder', function (e) {
			$input = $(this).data('input');
			$('input.image-upload[id="' + $input + '"').click();
		});

		$('input.image-upload').on('change', function (e) {
			self.uploadImage(this);
		});
	},

	uploadImage: function (image) {
		$.ajax({
			url: '/image_upload',
			type: 'POST',
			dataType: 'json',
			data: {image: $(image).val()},
		})
		.done(function() {
			console.log("success");
		})
		.fail(function() {
			console.log("error");
		})
		.always(function() {
			console.log("complete");
		});
		
	},

	initCharCount: function () {
		var text_max = 1000;
	    $('.character-count .count').html(text_max);

	    $('#descriere').keyup(function() {
	        var text_length = $('#descriere').val().length;
	        
	        if (text_length > 1000) {
	        	return;
	        }

	        var text_remaining = text_max - text_length;

	        $('.character-count .count').html(text_remaining);
	    });	
	},
};

$(document).ready(function($) {
	post.init();
});