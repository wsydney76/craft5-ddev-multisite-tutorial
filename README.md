# Craft 5 Multi-Site Tutorial

This is result of a Craft CMS multi-site tutorial/workshop. (Originally for Craft 4, now provisionally to Craft 5)

## Install with DDEV

* Clone this repository `git clone https://github.com/wsydney76/craft5-ddev-multisite-tutorial <dir> && cd <dir>`
* Run `bash setup/install <dir>`. There will be a user with the credentials `admin/password`.

## Install without DDEV

* Clone this repository `git clone https://github.com/wsydney76/craft5-ddev-multisite-tutorial <dir> && cd <dir>`
* Prepare webserver and database as usual
* Manually execute the steps in `setup/install` in the root directory of the project.

Demo data is either AI generated/translated or just demo nonsense. Or both. Visit the 'Munich' site for the most
complete set of
example pages.

Created in a series of private/informal workshops with a myriad of simple steps by some awesome young people.

Happy to share the final result with all of you.

## Screenshots

### Default site

Overview of the sites with their languages and lastest articles.

![Default page](/docs/screenshot-default.jpg)

### A site group page

Site home page with featured and latest articles. Full navigation with site and language switcher.

![Site page](/docs/screenshot-site.jpg)

### Article page

Article page with simple content builder.

Includes a 'List item' block type for lists of events/exhitibions etc.

![Article page](/docs/screenshot-article.jpg)

### Location page

List related articles with their corresponding 'List item' blocks as an example of using complex relationships.

![Location page](/docs/screenshot-location.jpg)

## Spec overview

To be honest, this started with 'Hello World' and continued from there with a "Hey, let's try this next" method.

Actually not really Craft focused, but more of a general web development/content modelling approach.

Here is a high level overview of how the spec would have looked like, see comments in twig templates for more details.

* A city magazine with multiple sites for different cities.
* Each site has a different set languages, including right-to-left languages.
* A default site (when just abc.com is called) with only an overview page linking to the other sites.
* Pages are shared across all sites.
* Articles/Locations are site-group specific, and are translated for all languages of the site group.
* Articles are linked to topics.
* Topics are shared across all site groups, however, each site can have a different set of topics.
* A start page for each site with featured articles and a list of latest articles.
* Index pages for articles/topics/locations with pagination.
* Index pages show cardlets with specific content per section.
* A simple content builder with just a few block types: Heading, Text, Image, Quote
* A 'List item' block type for lists of events/exhitibions etc, active only for articles.
* A 'Related entries' field for articles to link to other articles across all sites.
* Location pages show related articles with their corresponding 'List item' blocks.
* Images that are uploaded to articles are saved in a special dedicated folder for the entry.
* A search page with the option to search across all sites or just the current site.
* Support dark mode.

## Internals

* Craft 4.5 Solo
* Just Twig.
* No plugins (except Vite).
* No JavaScript.
* No PHP (almost).
* Tailwind CSS.
* Main layout with the option to use different content widths.
* CP UI Elements for showing reverse relationships, entry specific images and conflicting drafts (makes sense only in
  Pro).
* Img macro for handling images.
* Vite for compiling assets.
* Page section with different entry types.

### Performance optimisations

Here it is just the goal to learn about the different options, not to actually optimise the site.

So you will see responsive image sizes, eager loading, caching etc., but it will not be near to a perfect
implementation.

### Content

Provided by ChatGPT. We did not check for quality.

### Translations

Provided by DeepL, Google. We did not check for quality, especially for languages we don't even speak (like italian and
hebrew).
