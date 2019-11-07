# Mage Dev Podcast Episode
Example code for episode on Magento 2 View Models

Url: tbc

# How to use
Place the files in app/code of a Magento 2.2 or above site. Tested on 2.2 but will very likely work on 2.3+ as well.

# Tour of vendor & module folders
Below is a list of vendor folders and module names in this repo, along with why they exist.

Vendor Name | Module Name  | Notes
--- | --- | ---
MageDevPodcast | HomePageViewModel | Bear bones example of a view model on the homepage
ExampleOld | ModuleOne |Module showing a block class extending another, to produce text on the homepage
ExampleOld | ModuleTwo |Module showing a block class extending another, extending another, to produce text on the homepage in addition to ExampleOld_ModuleOne
ExampleOld | ModuleThree |Module showing a block class extending another, extending another, extending another, to produce text on the homepage, in addition to ModuleOne & ExampleOld_ModuleTwo
ExampleNew | ModuleOne |New View Model, cleaner way to produce text on the homepage
ExampleNew | ModuleTwo |New View Model, cleaner way to produce text on the homepage, in addition to ExampleNew_ModuleOne
ExampleNew | ModuleThree |New View Model, cleaner way to produce text on the homepage, in addition to ExampleNew_ModuleOne & ExampleNew_ModuleTwo
