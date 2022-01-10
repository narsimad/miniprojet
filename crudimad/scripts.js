function triggerClick(){
	document.querySelector('#profileImage').click();
}

function atriggerClick(){

	document.querySelector('#DrapImage').click();
}

function vtriggerClick(){

	document.querySelector('#video').click();
}

function displayImage(e){
	if(e.files[0]){
		var reader =new FileReader();
		reader.onload= function(e){
			document.querySelector('#profileDisplay').setAttribute('src',e.target.result);
		}
		reader.readAsDataURL(e.files[0]);
	}
}

function displayDrap(e){
	if(e.files[0]){
		var dreader =new FileReader();
		dreader.onload= function(e){
			document.querySelector('#DrapDisplay').setAttribute('src',e.target.result);
		}
		dreader.readAsDataURL(e.files[0]);
	}
}