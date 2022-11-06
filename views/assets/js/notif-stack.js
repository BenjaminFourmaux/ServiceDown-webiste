/************************
*	Notif-Stack.js		*
************************/

/*--- Interfaces ---*/
const NotifStack_Variant = {
	Primary: "primary",
	Secondary: "secondary",
	Success: "secondary",
	Danger: "danger",
	Warning: "warning",
	Info: "info",
	Light: "light",
	Dark: "dark"
}

const NotifStack_Position = {
	TopLeft: "top-left",
	TopRight: "top-right",
	BottomLeft: "bottom-left",
	BottomRight: "bottom-right",
}

const NotifStack_style = `
	#notifstack-drawer {
		z-index: 1001;
		position: fixed;
		bottom: 3em;
		left: 1em;
		width: 16em;
	}
	#notifstack-drawer .alert {
		margin-right: auto;
	}
	#notifstack-drawer .alert.alert-warning {
		background-color: var(--bs-warning);
	}
	#notifstack-drawer .notifstack-alert-icon {
		text-align: center;
		font-size: 2em;
	}
	#notifstack-drawer .notifstack-alert-body {
		border-top: 2px solid grey;
		font-size: 1.1em;
		max-height: 210px;
		overflow: auto;
	}
	#notifstack-drawer .notifstack-alert-body p:last-child {
		margin-bottom: 0rem;
	}
	#notifstack-drawer .notifstack-alert-body::-webkit-scrollbar-track {
		background-color: lightgrey;
	}
	#notifstack-drawer .notifstack-alert-body::-webkit-scrollbar-thumb {
		background-color: grey;
	}
`;


/*---- Functions ----*/
function insertAfter(newNode, existingNode) {
	existingNode.parentNode.insertBefore(newNode, existingNode.nextSibling);
}
function aosAnimationByPosition(position) {
	switch (position) {
		case NotifStack_Position.TopLeft:
		case NotifStack_Position.BottomLeft:
			return "fade-right";
		case NotifStack_Position.TopRight:
		case NotifStack_Position.BottomRight:
			return "fade-left";
	}
}

/*---- Builders ----*/
function NotifStack_removeDrawer() {
	if (document.getElementById('notifstack-drawer')) {
		document.getElementById('notifstack-drawer').remove();
	}
	if (document.getElementById('notifstack-style')) {
		document.getElementById('notifstack-style').remove();
	}
}

function NotifStack_createStyle () {
	head = document.getElementsByTagName('head')[0];
	styleElement = document.createElement('style');
	styleElement.setAttribute('id', "notifstack-style");
	styleElement.appendChild(document.createTextNode(NotifStack_style));
	head.appendChild(styleElement);
}

function NotifStack_createDrawer() {
	footer = document.getElementsByTagName('footer')[0];
	drawerElement = document.createElement('div');
	drawerElement.setAttribute('id', "notifstack-drawer");
	insertAfter(drawerElement, footer);
	
	comment = document.createComment("NotifStack drawer");
	insertAfter(comment, footer);
}

function NotifStack_createNotification(notification) {
	elem_alert = document.createElement('div');
	elem_alert.setAttribute('class', "alert alert-"+notification.variant+" align-items-center");
	elem_alert.setAttribute('role', "alert" );
	// AOS Animation
	elem_alert.setAttribute('data-aos', aosAnimationByPosition(notification.position));
	elem_alert.setAttribute('data-aos-duration', "700");
	
	if(notification.icon){
		elem_icon = document.createElement('div');
		elem_icon.setAttribute('class', "notifstack-alert-icon");
		elem_i = document.createElement('i');
		elem_i.setAttribute('class', notification.icon);
		elem_icon.appendChild(elem_i);
		elem_alert.appendChild(elem_icon);
	}

	elem_body = document.createElement('div');
	elem_body.setAttribute('class', "notifstack-alert-body");
	
	if (notification.text){

		elem_paragraph = document.createElement('p');
		elem_paragraph.setAttribute('data-i18n', "");
		elem_paragraph.appendChild(document.createTextNode(notification.text));
		elem_body.appendChild(elem_paragraph);
	}
	
	elem_alert.appendChild(elem_body);

	return elem_alert;
}


/*---- Object Classes ----*/

/**
* Represent a notification
**/
class Notification {
	/* Properties */
	position;
	variant; 
	duration;
	icon;
	text;
	
	constructor (variant, position, duration, icon, text) {
		this.variant = variant;
		this.position = position;
		this.duration = duration;
		this.icon = icon;
		this.text = text;
	}
	
	/* Methods */
	createHTMLElement() {
		return NotifStack_createNotification(this);
	}
	
}

class NotifStack {
	/* Properties */
	#stack;
	
	/* Constructor */
	constructor () {
		this.stack = [];
		NotifStack_removeDrawer();
		NotifStack_createStyle();
		NotifStack_createDrawer();
	}
	
	/* Methods */
	add (notif) {
		this.stack.push(notif);
		this.displayNotification();
	}
	
	remove () {
		this.stack.shift();
	}
	
	length () {
		return this.stack.length;
	}
	
	hideNotification() {
		document.getElementById('notifstack-drawer').innerHTML = '';
		this.remove();
	}
	
	displayNotification() {
		firstIn = this.stack[0];
		
		drawer = document.getElementById('notifstack-drawer');
		drawer.appendChild(firstIn.createHTMLElement());
		
		if (firstIn.duration !== null || firstIn !== -1) { // Notification with duration
			setTimeout(() => {
				this.hideNotification();
			}, firstIn.duration);
		}
	}
	
}

/*-- Tests --*/
$(document).ready(function() {
	fifo = new NotifStack();
	console.log(fifo.length());
	notif = new Notification("warning", NotifStack_Position.BottomLeft, 2000, "fa-solid fa-triangle-exclamation", "[html]notifications.alphaRelease");
	fifo.add(notif);
	console.log(fifo.length());
	fifo.remove();
	console.log(fifo.length());
});
