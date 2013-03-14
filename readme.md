##Magento Zurb Foundation
- Built on latest Foundation 4 by ZURB.
- A fork of Željko's Waterlee-Boilerplate (https://github.com/zeljkoprsa/waterlee-boilerplate)

##Public Alpha
- Don't download it just yet, it's not ready, unless you want to contribute.
- It's still not fully integrated and has parts of the theme I'm building for my store's theme, which I intend to finish first and then port most of the code here.
- I still have yet to remove all of zeljkoprsa's Waterlee theme.
- What I want is for Magento-Zurb-Foundation to be completely integrated with Foundation 4, be built mobile first and have the complete look and feel of Foundation. I plan to use it for all my future projects, so I need something that's very easy to customize, which is what made me fork Waterlee first, because it was unfinished, and didn't use most of Foundation's features.
-  The theme itself is still rough around the edges but you now have pretty much everything you need to start creating your own theme.
Remember that this is an ALPHA-boilerplate, not a production ready theme! The theming will be up to you!

##What's inside:
- Foundation 4 and all of it's parts. (http://foundation.zurb.com/)
- Fully integrated Magento Categories Menu, Search and Top Links with Foundation's Top Bar. (http://foundation.zurb.com/docs/components/top-bar.html)
- Off Canvas Left-Sidebar Menu on Mobile (http://www.zurb.com/playground/off-canvas-layouts)
- SCSS implemented (http://compass-style.org/)
- Templates files ridden of divitis
- Local XML for layout overrides
- Implemented classes that adhere to foundation docs

What's next (A.K.A. The P.L.A.N.):
- Complete "HTML Page Markup".(http://foundation.zurb.com/docs/index.html#basicHTMLMarkup)
- Implement "Orbit" completely with a backend for uploading and managing slides. (http://foundation.zurb.com/docs/components/orbit.html)
- Add <meta content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;' name='viewport' /> to the correct place to fix issues with Orbit not resizing slider properly.
- Implement "Reveal" for products that have only one image. (http://foundation.zurb.com/docs/components/reveal.html)
- Implement "Sections" for product page tabs. Possibly, give option in Admin panel to turn off tabs. (http://foundation.zurb.com/docs/components/section.html)
- Implement "Clearing" for product image galeries. (http://foundation.zurb.com/docs/components/clearing.html)
- Implement "Tooltips" where appropriate. [ ] Figure out where it would be appropriate. (http://foundation.zurb.com/docs/components/tooltips.html)
- Further remove clunky Magento CSS and optimize it for SCSS.

##Done!
- Improving this readme with references and more info
- Upgrade to Foundation 4 from 3.
- Implement proper "jquery.isotope" support so that as the screen shrinks, the columns take up the whole screen. (http://isotope.metafizzy.co/)
- Full Screen Layout. (It's the future, embrace it, and use the full realestate of the devices consumers use. Amazon has moved on, why haven't you?)

Currently, a demo is unavailable but at this point it's not about the looks, There is a demo under Waterlee-Boilerplate however. That would give you some idea of where this is going, however, I'm stipping all of the theming components that are in Waterlee, as it's not a pure Foundation 4 theme, which this intends to be. download it, test it and please do provide a constructive feedback. Receiving your feedback and participation will make this worthwhile for everyone.

Also, I'm not terribly good with PHP or JS, most of what I know comes from stitching together random pieces of PHP around the internet after Googling my proble, so I'm always happy for somone to take a look at the code and make sure it's up to snuff.

I hope Magento 2.0 comes soon, so I can slap Zurb Foundation or Twitter Bootstrap on it and finally forget about silly No-Conflict errors.

Further, this is my first time doing anything with Git or Github, so I'm still trying to figure out the best way to do things.

##Setup Tips:
- Download Sublime Text 2.
- If on Windows:
	- Download GitHub's application, it's awesome and comes with a great command line. Hit the [Clone in Windows] button on top.
	- Buy Sublime Text 2 (http://www.sublimetext.com/2) It's well worth it, and my fave editor.
	- Install the Compass Bundle for Sublime Text 2 (https://github.com/CristinaSolana/Compass-ST2-Bundle)
	- Open the Zurb-Foundation.sublime-project (skin/frontend/zurb-foundation/default/) in Sublime Text 2 and press Tools > Build so that the SCSS gets built.
- Edit "/skin/frontend/zurb-foundation/default/styles.scss" to edit the themes CSS.

I bounce from Linux to Windows, so your mileage may vary. The above is my current setup.