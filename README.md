# Welcome!

This weclome module allows authenticated users to see a snapshot of their user profiles via a block plugin that can be placed in the sidebar region of a standard Drupal theme.  There are four main data points:

- the user's display name
- the last log in date
- a link to the user profile
- an optional message to be configured by an admin

## Installation

1. Add the module to the /modules/custom directory of your Drupal project.
2. Enable the module, usually with `drush en welcome`.
3. Navigate to /admin/structure/block, and place the Welcome block in the sidebar region.
4. Configure the block according to roles, "When the user has the following roles:" Authenticated user.  The block can be rendered to a given set of content types of pages if desired.
5. Save the block, and that's it.  When an authenticated user views a page where the block is enabled, the data will display in the region where the block is placed.
6. Optional: navigate to /admin/config/system/welcome, and configure a custom message to display below the default user data.

## Examples

The rendered block with default settings:

![default settings](/screenshots/welcome_default.png "Default Settings")

The rendered block with optional admin message:

![optional settings](/screenshots/welcome_optional.png "Optional Settings")

The state of the page when the user is not authenticated:

![unauthenticated page](/screenshots/welcome_unauth.png "Unauthenticated Page")