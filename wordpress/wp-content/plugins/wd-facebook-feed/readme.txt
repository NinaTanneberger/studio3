=== 10Web Facebook Feed - Custom Facebook Feed Plugin ===
Contributors: webdorado,10web,wdsupport
Tags: customizable facebook feed, facebook, facebook events, facebook feed, facebook group, facebook like box, facebook likes, facebook page, facebook photos, facebook plugin, facebook posts, facebook likebox
Requires at least: 3.4
Requires PHP: 5.2
Tested up to: 5.1
Stable tag: 1.1.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

10Web Facebook Feed is the ultimate plugin to display custom Facebook feeds on your website.

== Description ==

10Web Facebook Feed is the ultimate plugin to display custom Facebook feeds on your website.


= Useful Links: =
    
[Live Demo](https://demo.10web.io/facebook-feed/)    
    
    
[Premium Facebook Feed by 10Web](https://10web.io/plugins/wordpress-facebook-feed/)    
    
    
[Special Offer for all Premium Plugins](https://10web.io/plugins-bundle-pricing/)    

Are you trying to link Facebook pages to your WordPress website? 
 
Struggling to match Facebook design with your website’s interface?
 
Are you stuck with limited sharing options on Facebook?

== 10Web Facebook Feed Features ==

**Display Facebook Feeds**
The plugin fetches your Facebook posts to your website.

**Filter Content Types\***
Display a specific content type feed: photos, statuses, videos, links.
 
**Custom Layouts\***
Select a view out of 4 options: Thumbnails, Compact Album. Blog style, and Masonry.
 
**Mobile-Friendly & Responsive**
Display your feed perfectly on any device of any size, both mobile and desktop.
 
**Lightbox\***
Display photos, videos in pop-ups with 15 transition effects.
 
**Videos Supported**
Videos uploaded on Facebook or shared from YouTube and Vimeo are displayed. 
 
**Themes\***
Choose from pre-made or create your own theme.
 
**Sharing Buttons\***
Add buttons to your posts to share them on Facebook, Twitter, and Google+.

**Sidebar View**
Widget allows sidebar view for your Facebook feed.

**Automatic Updates**
Your feed content updates automatically on your website.


_\* Premium version only_
   
== World Class Customer Support ==
*  Low response time
We always respond within a few hours.
*  Quick issue resolution
Resolving an issue never takes more than 24 hours.

== FEATURED REVIEWS ==

> If you have someone who pulls your data from facebook and posts in your website,  
> then you can fire them. This plugin does the job neatly and keeps everything organised. 
> You can select whether to posts only photos, videos or everything.  
> You can also set up how often to update the news.  
> This is really what I was looking for a long time. 
> Thanks the developers behind this plugin!
> [**by @codi56**](https://wordpress.org/support/topic/does-exactly-what-i-need-28/)


> I would give this plugin developer an A plus. It is not just a tool for displayng the feed of my Facebook page,  
> but an easy designer hand to style the feeds and to make them more user-friendly. 
> Nothing more to look for.
> [**by @adaada**](https://wordpress.org/support/topic/everything-i-wanted-2/)


> Excellent FB plugin and excellent support. Absolutely worth every penny.
> [**by @praguestreets**](https://wordpress.org/support/topic/excellent-plugin-2496/)


== How to Display Your Facebook Feed ==
1. Install 10Web Facebook Feed Plugin.   
2. Login with Facebook.   
3. Publish your feeds.   

> **[Premium version adds](https://10web.io/plugins/wordpress-facebook-feed/)**
> 
> *   Masonry gallery View  
> *   Mosaic gallery View
> *   Single-type content feeds of content from your Facebook wall (photos, videos, albums)  
> *   Facebook share buttons  
> *   Advanced lightbox with comments  
> *   Filmstrip for lightbox  
> *   Themes to change styles and colors for each view  
> *   Multiple layouts – album view for albums, masonry and blogStyle and thumbnail views for Facebook videos and photos
> *   Social sharing for feed to Google+, Twitter and Facebook.    




**SETTINGS/CUSTOMIZATION**
*Some customizations described here are available in Premium version. Please refer to premium feature summary below.*

To have 10Web Facebook Feed plugin up and running you have to create an app on Facebook. This is a required step by Facebook, but it's pretty easy once you check the plugin's user guide. Under the plugin's general options you provide Facebook app ID and secret, and then you can specify the feed auto update interval, choose the date format for posts and more.

Adding feeds is just a matter of a few clicks. You just click on the **Add new** button from the feeds section of the plugin, and a new window with four setting tabs will open, including settings for the feed, lightbox, comments. From the main feed settings you set the page to create a feed with. Under the main settings you can also choose whether you display the whole timeline of the feed, or choose to display only specific content, such as only photos, videos, links.

With a Facebook page feed, you can filter out the content based on user roles, and show posts and updates only from the page owner or other users from the group, or both. There is a long list of the lightbox settings you can enable, including social share buttons, showing comments, playing filmstrip, and more. The comments settings mainly include choosing comment filtering option, whether its top level or stream, with the former being the same structure as in Facebook and the latter including all-level comments. Here you can also enable showing the comment replies and choose commenting order.



###IMPORTANT:
If you think you found a bug in10Web Facebook Feed or have any problem/question concerning this plugin, please check out [Support Forum](https://wordpress.org/support/plugin/wd-facebook-feed) . 

== Privacy Policy =
The plugin uses Facebook API to get public data from Facebook. All the received data is cached in WordPress database for some short customizable period to provide optimization. You can delete or update cached data. You can optionally enable like button for Facebook page. If you do so, Facebook will load some JS and embedded content which may track visitors. Facebook embeds are regulated under terms of Facebook privacy policy https://www.facebook.com/policy.php.

== Changelog ==

= 1.1.6 =
* Fixed: Minor bug.

= 1.1.5 =
* Changed: Links to 10Web.io.

= 1.1.4 =
* New: Gutenberg block
* Fixed: Replace curl calls by wp_remote_get and wp_remote_post
* Fixed: Failing to save theme (Premium)
* Fixed: Compatibility with some plugins

= 1.1.3 =
* Added: Facebook widget in 10Web Builder

= 1.1.2 =
* Fixed: Inserting shortcode when when no feed is selected
* Fixed: Events features are removed because Facebook events API was shut down

= 1.1.1 =
* Improved: Simplified Facebook login. No need to enter app ID and get page tokens manually. This is a new Facebook app, so reauthentication is required.
* Fixed: Elementor compatibility

= 1.1.0 =
* **Important: Breaking change. Obtaining page access token is required to display your page content with 10Web Facebook Feed plugin. See the [documentation](https://help.10web.io/hc/en-us/articles/360017959512-Getting-Facebook-Access-Token).
* Fixed: Error on PHP 7.2
* Fixed: Notices when feed is unpublished
* Changed: Deactivation popup

= 1.0.38 =
* New: Using page access token
* New: Reset and update cached Facebook data
* Changed: Uninstall page moved from separate menu to settings page
* Changed: Session usage removed
* Fixed: WordPress loopback request error because of sessions
* Fixed: PHP notices in widget

= 1.0.37 =
* Changed: API requests reduced from frontend
* Changed: Use another token if API returns any kind of error
* Removed: Likes temporarily not displayed
* Fixed: Unnecessary requests from feeds list admin screen

= 1.0.36 =
* Changed: Use built-in access tokens if user's token has expired rate limit

= 1.0.35 =
* Fixed: Crash on front end when API returns error
* Improved: Use another access token if API request limit of current token is exceeded

= 1.0.34 =
* Fixed: Bug on video post   

= 1.0.33 =
* Fixed: Empty post bug  
* Changed: Default API keys   
* Fixed: Bug on setting API keys from options

= 1.0.32 =
* Important: Facebook API has been changed on without any warning, and now it does not allow bringing posts from public groups.  

= 1.0.31 =
* Fixed: Bug on autoupdate   
* Fixed: Bug on comments   

= 1.0.30 =
* Changed: Deactivation popup 

= 1.0.29 =
Added: Support forum and Review links.   

= 1.0.28 =
* Fixed: Spinning icon  

= 1.0.27 =
* Changed: Show notification to install Backup WD plugin only on plugin pages.  

= 1.0.26 =
* Fixed: Unexpected error when saving feed    
* Added: Notice to install Backup WD plugin    

= 1.0.25 =
* Fixed: Updated library to prevent conflict with PHP version 7     

= 1.0.24 =
* Changed: Default tokens   

= 1.0.23 =
* Fixed: Translations    

= 1.0.22 =
* Fixed: shortcode styles and tinymce errors on WP 4.8   

= 1.0.21 =
* Fixed: Bug on autoupdate   
* Fixed: Event ordering       

= 1.0.19 =
* Changed: Autoupdate   

= 1.0.18 =
* Added: Support Forum links    

= 1.0.17 =
* Added: Overview page   
* Changed: Deactivation   

= 1.0.16 =
* Fixed: Conflict with Visual Composer  
* Changed: Data optimization   

= 1.0.15 =
* Fixed: bug on posts with no shares    
* Fixed: bug on showing old events   

= 1.0.14 =
* Fixed: Bug on reactions      
* Fixed: Bug on multiple Feeds   
* Fixed: Bug on widget dimension   

= 1.0.13 =
* Changed: Featured plugins      
* Fixed: Bug with albums    

= 1.0.12 =
* Fixed: Changes in database after plugin version update via FTP or AJAX requests with silent activation      

= 1.0.11 =
* Added: Reactions    
* Changed: Graph api calls    
* Fixed: Minor bugs       

= 1.0.10 =
* Added: Notice for appID and access token   
* Changed: Default tokens   

= 1.0.9 =
* Fixed: Maximum Post message(description) Length option bug
* Fixed: Minor bug 

= 1.0.8 =
* Fixed: Minor bug   

= 1.0.7 =
* Fixed: Bug in creating tables     

= 1.0.6 =
* Fixed: Broken image in Firefox        
* Fixed: Post with quotes        

= 1.0.5 =
* Added: Review, User guide notices       

= 1.0.4 =
* Fixed: Bug in Autoupdate   

= 1.0.3 =
* Added: Event ordering by event date  
* Added: Languages   

= 1.0.2 =
* Minor bug fixed   

= 1.0.1 =
* Minor bug fixed   

= 1.0.0 =
* Initial version

== Screenshots ==
1. 10Web Facebook Feed - Timeline        
2. 10Web Facebook Feed - Videos         
3. 10Web Facebook Feed - Mansory view         
4. 10Web Facebook Feed - Event     
5. 10Web Facebook Feed - Edit Facebook Feed     
6. 10Web Facebook Feed - Edit Options      
7. 10Web Facebook Feed - Edit Theme    

== Installation ==

#### Thank you for your interest in10Web Facebook Feed.  

### Minimum requirements.  
*   Wordpress 3.4+  
*   PHP 5.x  
*   MySQL 5.x  

### Perform a new installation  

After downloading the ZIP file of the plugin,  

1. Log in to the administrator panel.   
2. Go to Plugins Add > New > Upload.     
3. Click "Choose file" ("Browse") and select the downloaded zip file of the plugin.     
4. Click "Install Now" button.     
5. Click "Activate Plugin" button for activating 10Web Facebook Feed.    



== Frequently Asked Questions ==

= What does Facebook Feed plugin do? =

**10Web Facebook Feed** is a completely customizable, responsive solution to help you display your Facebook feed on your WordPress website.

The plugin comes with a number of great features and functionality. Add as many feeds as you want and easily display content from your Facebook page in any posts or pages using shortcodes.

= How can I create a Facebook feed with this plugin? =

To configure a feed with 10Web Facebook Feed plugin, navigate to **10Web Facebook Feed > Feeds** page.

Each feed includes various options which are grouped in tabs:
  * Main,
  * Lightbox Settings,
  * Comments,
  

First, name your feed and set the **URL** of your Facebook page, for example:

*https://www.facebook.com/examplepage*

While creating feeds, you can display the full timeline of all posts, or with specific type of data:

  * Photos,
  * Videos,
  * Statuses,
  * Links, 
  

= What kind of content can I display with my Facebook feed? =

Using 10Web Facebook Feed plugin, you can display full **Timeline** of your Facebook page, as well as **Specific** data, such as only photos or videos. Use **Content Type** option under **Feed Settings** to select this.

**Timeline**
With this content type, you can display all posts from the page. Set the number of posts to be displayed. You can choose not to update the feed, and just import selected number of posts once.

Furthermore, you can configure auto-update to sync your feeds with new posts from your Facebook page.

Using Timeline content type, you are able to showcase your posts using stunning **Blog Style layout** of 10Web Facebook Feed plugin.

**Specific**
Display only photos or videos, albums of your Facebook page, using **Specific** content type. You can choose one of the following four options:

  * Photos,
  * Videos,
  * Albums,
  

The layouts you can use for Specific feeds differ depending on content type.

  * **Photos** and **Videos** can be showcased with **Thumbnails** and **Masonry** layouts,
  * For **Albums** you can use **Album** layout,
  

= How do I publish Facebook Feed on my website? =

You can publish Facebook Feed on a **post** or **page,** as well as with a **widget.**

**Publishing on Pages and Posts**
To showcase the created feeds on a page or post, you need to use the **shortcode** of 10Web Facebook Feed. Add or edit the page or post, where you need to have your Facebook feed. Press **Add Facebook Feed** button and select the feed.

After pressing **Insert** button, the shortcode will be added to the content of your page or post.

**Publishing as a Widget**
Navigate to **Appearance > Widgets** page to begin configuring a Facebook feed widget. Find **10Web Facebook Feed widget** and drag it to the necessary widget area. Fill in the following settings and press **Save.**

  * **Title.** Set a title for your Facebook feed widget.
  * **Feed.** Select the feed which you wish to showcase.
  * **View.** Choose the layout for the feed. Depending on feed content type, this can be set to Blog Style, Album, Masonry and Thumbnails.
  * **Count.** Set a constant number of posts which will be displayed with the widget.
  * **Dimensions.** Define the dimensions of Facebook feed widget.
  * **Theme.** Select the theme for the widget.

= How can I change the appearance of Facebook feeds? =

**Premium** version of 10Web Facebook Feed plugin lets you change the appearance of the feeds using its **Themes.** Navigate to **10Web Facebook Feed > Themes** page to make modifications.

WordPress Facebook Feed plugin includes **7 built-in themes,** one of which is set to be the default. You can modify these themes or create a new one. You have the option to reset the theme options to their defaults anytime.

Each theme provided by 10Web Facebook Feed plugin consists of the following sections:

  * **Thumbnails.** Configure options for thumbnail border, hover effect, transition, margin, padding, view and thumbnail background colors and transparency level, image alignment, image title options, like and comment box options.
  * **Masonry.** Configure options for masonry thumbnail border, padding, view and thumbnail background colors and transparency level, like and comment box options, hover effects, image description options.
  * **Compact Album.** Configure options for thumbnail border, hover effect, transition, margin, shadow, padding, view and thumbnail background colors and transparency level, image title options, back button options.
  * **Blog Style.** Configure options for comments box, Like, share, comment display, hashtags, image captions, location and dates, page, profile name and feed overall settings.
  * **Lightbox Page.** Configure options for lightbox background, control, toggle, close and navigation buttons, filmstrip options, story options, Like, share, comment display, hashtags and comments options.
  * **Navigation.** Configure navigation button options, which will be used for masonry, thumbnail, compact album and blog style views.

= How can I display comments in the feed? =

Comments can appear with the standard structure of Facebook, which displays only **Top level** comments without replies, as well as **Stream,** which shows both the comments and their replies.

If you want to use Top level but give a function to show all replies then enable **Show replies** option. Comment feed can be set either in chronological or reverse chronological order.


= Can I modify the appearance of the lightbox? =

Lightbox of 10Web Facebook Feed plugin can be used for albums, images, videos. You can change the style of the lightbox from **10Web Facebook Feed > Themes** page.

Furthermore, you can modify the features of it using **Lightbox Settings** tab inside your feed.

  * **Full width lightbox.** The output of the full width lightbox will be a large lightbox covering entire display of the used device.
  * **Lightbox dimensions.** If you opt for fixed-size lightbox you need to configure its dimensions.
  * **Lightbox effect.** There are 15 lightbox effects for image transitions. You can choose one of them or skip it, setting lightbox effect to **None.**
  * **Lightbox autoplay.** Autoplay will change images within given time interval.
  * **Time interval.** Set time which will be applied for shifting images in lightbox.
  * **Open comment box.** Choose whether to display comments of the image/video in lightbox or not.
  * **Show filmstrip in lightbox.** By enabling filmstrip you will display small thumbnails of images/videos included in album/timeline. When hitting a filmstrip thumbnail the user will get a chance to open up the corresponding image/video and continue lightbox navigation from there.

In addition, you can display comments on the lightbox, likes, author, post name, and much more.

= My Facebook page feed doesn't display anything. How can this be fixed? =

The feed might not be working correctly because the page you are trying to display with 10Web Facebook Feed plugin has **age** or **country restrictions.** 

Unfortunately, this cannot be controlled by 10Web Facebook Feed, since Facebook API does not provide data about pages with restrictions. 

Therefore, please make sure to remove the restrictions, and try again.