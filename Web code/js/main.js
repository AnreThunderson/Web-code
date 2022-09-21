fetch('assets/laboratory.txt') 
.then(laboratoryText => laboratoryText.text())
.then(laboratoryHTML => document.getElementById('laboratory-text').innerHTML = laboratoryHTML);

fetch('assets/social.txt') 
.then(socialText => socialText.text())
.then(socialHTML => document.getElementById('social-text').innerHTML = socialHTML);

fetch('assets/business.txt') 
.then(businessText => businessText.text())
.then(businessHTML => document.getElementById('business-text').innerHTML = businessHTML);

fetch('assets/healthcare.txt') 
.then(healthcareText => healthcareText.text())
.then(healthcareHTML => document.getElementById('healthcare-text').innerHTML = healthcareHTML);

fetch('assets/government.txt') 
.then(governmentText => governmentText.text())
.then(governmentHTML => document.getElementById('government-text').innerHTML = governmentHTML);

fetch('assets/education.txt') 
.then(educationText => educationText.text())
.then(educationHTML => document.getElementById('education-text').innerHTML = educationHTML);

fetch('assets/hospitality.txt') 
.then(hospitalityText => hospitalityText.text())
.then(hospitalityHTML => document.getElementById('hospitality-text').innerHTML = hospitalityHTML);

function unhide(name) {
	/* 	The unhide and hide functions are used with the chevron controls
			on the "About Us" page - individual biographies. Unhide shows the
			additional material block of text, and hide collapses it back
	*/	 	 		
	document.getElementById(name).style.display='inline-block';
	let chevdownid = name + 'downchev';
	document.getElementById(chevdownid).style.display='none'; 
	let chevupid = name + 'upchev';
	document.getElementById(chevupid).style.display='block';        
}

function hide(name) {
	document.getElementById(name).style.display='none';
	let chevdownid = name + 'downchev';
	document.getElementById(chevdownid).style.display='block'; 
	let chevupid = name + 'upchev';
	document.getElementById(chevupid).style.display='none'; 
}       

function activePage () {
	/* This function is used to change the main title of the page in the
		 <h1> tag and also add the class to the correct navbar nav-item to show 
		 it as the currently selected page with custom styling. Because these
		 elements are in a common file, we have to do this with code after the 
		 php script loads the header.
	*/

	// Get the current filename, to search for it later
	let thisPathname = window.location.pathname;
	let lastSlash = thisPathname.lastIndexOf('/');
	let lastDot = thisPathname.lastIndexOf('.');
	let thisFilename = thisPathname.slice(lastSlash+1,lastDot);
	
	// Change the contents of the <h1> tag
	// let currentName = document.getElementById('pageTitle').innerHTML;
	 
	// switch(thisFilename) {
	// 	case 'about':
	// 		document.getElementById('pageTitle').innerHTML = currentName + ' - ABOUT US';
	// 		break;
	// 	case 'services':
	// 		document.getElementById('pageTitle').innerHTML = currentName + ' - SERVICES';
	// 		break;
	// 	case 'blog':
	// 		document.getElementById('pageTitle').innerHTML = currentName + ' - BLOG';
	// 		break;
	// 	case 'contact':
	// 		document.getElementById('pageTitle').innerHTML = currentName + ' - REQUEST CONSULTATION';
	// 		break;
	// 	case 'joinus':
	// 		document.getElementById('pageTitle').innerHTML = currentName + ' - APPLICATION';
	// 		break;
	// 	case 'terms':
	// 		document.getElementById('pageTitle').innerHTML = currentName + ' - TERMS AND CONDITIONS';
	// 		break;
	// 	case 'feedback':
	// 		document.getElementById('pageTitle').innerHTML = currentName + ' - WEBSITE FEEDBACK';
	// 		break;
	// 	case 'credits':
	// 		document.getElementById('pageTitle').innerHTML = currentName + ' - WEBSITE DESIGN CREDITS';
	// 		break;
	// 	default:
	// 		break;
	// }

	// Search the nav-links for the id matching the filename and add 'active' class
	if(thisFilename != 'index') {
		let element = document.getElementById(thisFilename).className;
		
		let newClassName = element + ' active';
		
		//window.alert(newClassName);
		document.getElementById(thisFilename).className = newClassName;
	}
};