=== NGG Smart Image Search ===
Contributors: (wpo-HR)
Tags: NextGEN Gallery, image search, image, search, smart, smart search, customizable, gallery, album, WordPress, plugin, widget, shortcode, Bildersuche, Galerien, Alben, Album, Suche, Bilder
Requires at least: 4.5.1
Tested up to: 4.7.2
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

NGG Smart Image Search provides a smart search and display functionality for images in selectable collections of NextGEN galleries.

== Description ==

NGG Smart Image Search will provide a highly customizable search functionality for images in NextGEN Galleries. Search results can be displayed in various layouts including original NextGEN galleries.

You find more infos and examples on the <a href="https://r-fotos.de/wordpress-plugins/nextgen-galleries-smart-image-search/" target="_blank" >plugin website</a>.

Customization can be done differently for public and private searches, i.e. for public and logged in users. Customization will be done via widgets or shortcodes.

The scope of search can be defined by customizable lists of galleries:

* all galleries
* only selected list of included galleries and albums
* optionally selected list of excluded galleries and albums

The search will be carried out across title, description, filename and tags (as configured per widget or shortcode) of all images in the selected search gallery list.

The search itself can be carried out for a single searchstring or as a multi-keyword search. It can be restricted to individual fields (like tags) or it can be negated.<br>
For an extended documentation see <a href="https://r-fotos.de/wordpress-plugins/nextgen-galleries-smart-image-search/qualified-search-examples/" target="_blank" >qualified search examples</a>.

The search result list can be configured as
 
* a single image list providing additional image metadata
* an advanced thumbnail list in a grid
* an original NextGEN gallery or NextGEN Pro / Plus gallery

For an extended documentation see <a href="https://r-fotos.de/wordpress-plugins/nextgen-galleries-smart-image-search/display-search-result-list/" target="_blank" >display search result list</a>.

The single image list will optionally show the following information:

* image id
* image title
* image description
* filename of image
* size of image in bytes and pixel dimensions
* size of backup image in bytes and pixel dimensions
  (original image is optionally saved as backup image by NextGEN Gallery if uploaded image is resized and optimized during upload)
* user id of uploading user (needs NextGEN Gallery table customization)
* gallery id of gallery, where image is listed
* title of that gallery
* description of that gallery
* tags saved with the image

The plugin NGG Smart Image Search will provide

* a customizable widget and a customizable shortcode [hr_SIS_nextgen_searchbox] to define a dynamic search depending on user type (public or logged in)
* a customizable shortcode [hr_SIS_display_images] to list the search results with different layouts. This shortcode will also accept a static search input.
* a shortcode [hr_SIS_textbox usertype='logged_in'/'public'] to add describing text depending on user type

This plugin will automatically generate a landing page for the widget-based search. This landing page can be configured freely by plugin settings and/or by WordPress edit page means (including redefinition of slug and title).

== Installation ==

1. Upload `ngg-smart-image-search` to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Adjust settings, widget parameters and shortcodes as necessary

== Frequently Asked Questions ==

= How does the search work ? =

There are three possibilities to perform a search for images:

(1) Use a dynamic search field in a sidebar widget.<br>
The plugin comes with a widget "NGG Smart Image Search". If you use this widget, it will provide a search field in the sidebar. Entering text in the search field will send the input to an automatically generated search page. This search page is described on the settings page of the plugin. You can freely customize this search page.
The search page will use a shortcode [hr_SIS_display_images] to generate and display the result list.

(2) Use a dynamic search field provided by the shortcode [hr_SIS_nextgen_searchbox].<br>
This shortcode searchbox can be placed on any post or page (also on the automatically generated search page).
Entering text in this searchfield will send the input to the shortcode [hr_SIS_display_images], which must be placed on the same page. Otherwise you won't get any search results. The shortcode [hr_SIS_display_images] will generate and display the search result.

(3) Use a predefined static search input as parameters with the shortcode [hr_SIS_display_images].<br>
In this case the shortcode [hr_SIS_display_images] will only display the static search result and will ignore all dynamic search inputs.


= How can a search be customized ? =

You can freely specify the scope of the image search by listing or excluding galleries and albums.<br>
You can also specify the listed fields in the result list if not displayed as a gallery.

You can do this separately for public users and for logged in users.

If you do it by using search widgets, you define separate widgets for public users and for logged in users. Users will only see one widget which is relevant for them.

If you use a searchfield shortcode [hr_SIS_nextgen_searchbox] you specify your customization by parameters (see screenshots for a complete list of parameters).<br> 
By default parameters are initiated differently for public users and for logged in users (see screenshots).<br>
You can overwrite these settings by specifying the parameters in the searchbox shortcode. 
E.g. parameter list_descr="1" will list the image description in the result list for all users.<br>
If you want to set this parameter only for public users, you use prefix "pu_", i.e. pu_list_title="1".<br>
If you want to set this parameter only for logged in users, you use the prefix "lo_", i.e. lo_list_descr="1".


= How can the result list be customized ? =

The result list is generated by the shortcode [hr_SIS_display_images]. This shortcode accepts a display parameter to select the result list layout.
There are several options available:

(1) display="si" or display="ngg_single_images"<br>
This will generate a detailed result list in table format showing found images and their describing fields.
The images are displayed using the native NextGEN Gallery shortcode for displaying single images. 
Clicking on an image will open the image in the lightbox as defined on the NextGEN Gallery setting page. The lightbox will only display a single image, no skipping to next found image.

(2) display="li" or display="linked_images"<br>
This will generate the same result list as in option (1).<br>
However, the found images are here displayed using explicite image links generated by this search plugin. 
For this option you should configure NextGEN Gallery so that the standard NextGEN Gallery lightbox will also work for all other linked images.
Doing this you can again open each listed image in the standard NextGEN Gallery lightbox.
However, now you can skip all images in the lightbox, you do no longer have to click on each image first.

(3) display="bt" or display="ngg_basic_thumbnails"<br>
This will generate a standard NextGEN basic thumbnails gallery for all found images.
The found images are only listed as thumbnails, there is no further describing text for the images.
This plugin uses the standard NextGen settings for gallery display.

(4) display="at" or display="advanced_thumbnails"<br>
This will generate a proportional thumbnails grid for all found images.
Furthermore, the image title is listed for each thumbnail.
The result list consists of linked images. As for display type (2), you should configure NextGEN Gallery so that the standard NextGEN Gallery lightbox will also work for all other linked images.

(5) display="pt" or display="ngg_pro_thumbnails"<br>
    display="ma" or display="ngg_pro_masonry"<br>
    display="mo" or display="ngg_pro_mosaic"<br>
If the premium plugin 'NextGEN Gallery Plus' or 'NextGEN Gallery Pro' is installed, you can also display the result list as a NextGEN pro gallery:

* "pt" results in a Pro Thumbnail Gallery
* "ma" results in a Pro Masonry Gallery
* "mo" results in a Pro Mosaic Gallery
This plugin will use the standard NextGen settings for the displayed galleries.

In future releases there might be more formatting options available for the result lists.
Currently only only for list (1) and (2) a spacing parameter defines the width of the fieldnames in the resultlist.
The default is set to  spacing="10em". Possible values can be defined with units em, rem or px. 


= What search strings can be entered ? =

You can enter any sensible search text. 
The whole text, including entered spaces, will be searched for in the image fields Title, Description, Filename and Tags as configured in the searchfield widget or shortcode.
You can include a dynamic display option in the search text by directly appending ">si", ">li", ">at" or ">bt" to the search text (no blanks in between).
The result list will use the corresponding layout as described above.

For logged in users there is a special search option available:  g:&lt;gallery id&gt;.
This will list all images of the gallery with Id &lt;gallery id&gt;. 
The result list will also provide the gallery name and gallery id with underlying links to the backend gallery administration page or to the gallery page, if such a page is defined for the NextGEN Gallery in the backend.

There are other special search options available like r:&lt;number&gt; for searching most recent images or l:&lt;number&gt; for last uploaded images.<br>
You can also do multi-keyword searches like "sun & clouds & summer" which will search for all images satisfying all three single search conditions (in the given example).<br>
You can negate searchstrings by "&- searchstring".<br>
You can restrict searchstrings to dedicated fields like "&t sund &t clouds" which will only search in tags.

For an extended documentation see <a href="https://r-fotos.de/wordpress-plugins/nextgen-galleries-smart-image-search/qualified-search-examples/" target="_blank" >qualified search examples</a>.


== Screenshots ==

1. widget display for search definition
2. single image search result list
3. advanced thumbnails search result list
4. settings page
5. shortcode default parameters for public users
6. shortcode default parameters for logged in users

== Changelog ==

= 2.1 = 
This is a maintenance update, uploaded 2017-02-28.

* Fixed: multi-keyword search for multiple tags is now working as designed
* Changed: the default gallery display options for NextGen Galleries (standard and pro / plus) are now set according to the NextGen gallery settings. 
* Updated: documentation is being updated and corrected

= 2.0 =
This is a major functional update.

* NEW: advanced searches can be defined combining multiple searchstrings by a logical AND condition
* NEW: searches can now be dynamically restrited to single searchfields
* NEW: result list can be displayed as an advanced thumbnail gallery featuring proportional images and title text in a grid
* NEW: result list can be displayed as a regular nextgen plus/pro gallery (pro thumbnail, pro masonry, pro mosaic) if this premium plugin is installed
* NEW: special search code 'r:nn' will display the nn most recent images according to their exif exposure date
* NEW: special search code 'l:nn' will display the nn last uploaded images
* NEW: display shortcode now can also show a predefined static search result
* Fixed: if the landing page gets deleted by any reason it is now rebuild during activation of the plugin (of course, you have to deactivate it first)
* Updated: plugin documentation is updated in the plugin directory
* Updated: plugin documentation on the <a href="https://r-fotos.de/wordpress-plugins/nextgen-galleries-smart-image-search/" target="_blank" >plugin website</a> 
* Changed for better readability: display type has been renamed from single_images to ngg_single_images and shortcode hr_SIS_display_images is renamed to hr_SIS_display_images

= 1.4 =
* NEW: result list can be displayed as a NextGEN basic thumbnails gallery
* NEW: detail result list will link found images in the lightbox (you can skip through the images)
* NEW: the searchbox shortcode now accepts all parameters either for public user, for logged in users or for all users
* NEW: dynamic result list layout: you can now add a layout code to the seachstring to modify the result list dynamically
* NEW: FAQ now explain some settings

= 1.3 =
* Fixed: file addressing in virtual host environments

= 1.2 =
* NEW: special search code 'g:nn' will list all images of gallery with id equal nn (only for logged in users)
* Fixed: check for selected galleries used old identifier, is now corrected. No need any longer to adjust code.
* Fixed: with new NextGEN Gallery release update there was a minor issue with shortcode handling which is now fixed

= 1.1 =
* NEW: the gallery id of found images will link to the backend gallery administration page, if user is logged in and has capability to manage that gallery
* NEW: the gallery name of found images will link to the frontend page of that gallery, if such a page is defined
* NEW: logged in users can list galleries with a special search code 'g:nn', where nn is the gallery id
* Fixed: some file addressing issues in multisite environments
* Fixed: some CSS formatting issues for the search box

= 1.0 =
* Initial public version

== Upgrade Notice ==

= 2.1 =
no special issues, just use normal upgrade procedure

= 2.0 =
use normal upgrade procedure<br>
For better readability there were two name changes.<br>
1. Previous shortcode [hr_SIS_search_nextgen_images] is now changed to [hr_SIS_display_images].<br>
The previous shortcode will still function correctly, but should be replaced through the new shortcode.<br><br>
2. Previous display mode 'basic_thumbnails' is being replaced by 'ngg_basic_thumbnails'.<br>
Display modes starting ngg_... will use original NextGEN Galleries for displaying search results.

= 1.4 =
no special issues, just use normal upgrade procedure

= 1.3 =
no special issues, just use normal upgrade procedure

= 1.2 =
no special issues, just use normal upgrade procedure

= 1.1 =
no special issues, just use normal upgrade procedure

= 1.0 =
No upgrade, just initial install