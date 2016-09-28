Structure template
------------------

This is the structure I use for developing web-apps.

Folders:

=>root:
	=> AppData: I use it to store any piece of documentation I need for the project
	=> css: hold the css file(s)
		=> bootstrap.css
	=> Doctrine: holds all the files to work with doctrine
	=> img: storage for images
	=> js: here I park my javaScript / jQuery file(s)
	=> src 
		=> Layers: here the different layers are stored
			=> Business: here I process/verify the data before storing/displaying it
			=> Data: here I talk to my database
			=> Entities: this is the folder my entities live in
			=> Exceptions: they have to be stored somewhere
			=> Presentation: this holds the pages for display
	=> bootstrap.php (for doctrine, all configured and ready to use provided you do not change the folder structure)
	=> controller_template.php (I keep my controllers in the root and I start from this template)
	=> index.php (I use this to redirect visitors to the correct page)