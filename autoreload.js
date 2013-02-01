//Requires jQuery
setInterval(function() {
	$.ajax({
		//Set this to point the the iterator.php file at the base of your project
		url: 'iterator.php',
		method: 'get',
		success: function(response) {
			json = $.parseJSON(response);
			
			$.each(json, function(file, hash) {
				if (localStorage[file]) {
					//If file is being watch and it has been changed update hash and reload page
					if (localStorage[file] != hash) {
						localStorage[file] = hash;
						location.reload();
					}
				} else {
					//If file isn't being watch add it's hash to localStorage
					localStorage[file] = hash;
				}
			});
		}
	});
}, 3000);