#
# This file is only needed for Compass/Sass integration. If you are not using
# Compass, you may safely ignore or delete this file.
#
# If you'd like to learn more about Sass and Compass, see the sass/README.txt
# file for more information.
#

# Require any additional compass plugins here.
require 'sass-globbing'
require 'breakpoint'
require 'compass'
require 'toolkit'
#   May be deleted?
# require 'compass/import-once/activate'
#   May come in handy
# require 'sass-globbing'
# require 'susy'

#
# Environment
#

# Change this to :production when ready to deploy the CSS to the live server.
# Default is :development
# Best if supplied: may be supplied on command line, --environment production
# Or explicit by uncommenting these lines
#environment = :development
#environment = :production

#
# Debugging
#

# Default Sass 3.4:  =>  --sourcemap      (produce  {filename}.map)
# If disabled,       =>  --debug-info     (produce  @media -sass-debug-info{filename... )
# If disabled        =>  --line-comments  (produce  /* line 29, ../../sas )
# If disabled        =>  no debug info :)

# If in development (set above), we can turn on the sourcemap file generation.
# Supported natively in Firefox, Chrome, Safari, the best way to debug
# Requires sass 3.3+ and compass 1.0.1+
# Determine version from command line: sass --version && compass --version
# May be supplied on command line, --no-sourcemap or --sourcemap
#sourcemap = false
sourcemap = true

# Alternative development debugging methods
# If in development (above), we can enable line_comments for FireCompass plugin.
# Requires Firebug plugin and FireCompass plugin
firecompass = false
#firecompass = true

# If in development (above), we can enable debug_info for the FireSass plugin.
# Requires Firebug plugin and Firesass plugin
firesass = false
#firesass = true

#
# Directories
#

# Set this to the root of your project when deployed:
http_path = "/"

# Location of the theme's resources.
css_dir = "css"
sass_dir = "scss"
images_dir = "images"
javascripts_dir = "javascripts"
fonts_dir = "fonts"
# cache_path = "../../../../../sites/pega.com/files/css/.sass-cache"


## ----------------------------------------------------
## You probably don't need to edit anything below this.
##

# Default to development if environment is not set.
saved = environment
if (environment.nil?)
  environment = :development
else
  environment = saved
end

# You can select your preferred output style here (:expanded, :nested, :compact
# or :compressed).
# Default is :nested.
# May be supplied on command line, --output-style compact
output_style = (environment == :production) ? :compressed : :nested

# To enable relative paths to assets via compass helper functions. Since Drupal
# themes can be installed in multiple locations, we don't need to worry about
# the absolute path to the theme from the server omega.
# May be supplied on command line, --relative-assets false
relative_assets = true

# Conditionally enable line comments when in development mode.
# May be supplied on command line, --no-line-comments or --line-comments
#line_comments = (environment == :production) ? false : true
#sass_options = (environment == :development && firecompass == true) ? {:line_comments => true} : sass_options
line_comments = false

# Output debugging info in development mode.
# May be supplied on command line, --no-debug-info or --debug-info
#sass_options = (environment == :production) ? {} : {:debug_info => true}
#sass_options = (environment == :development && firesass == true) ? {:debug_info => true} : {}

# Enabled source maps in development mode for debugging purposes.
#sass_options = (environment == :development && sourcemap == true) ? {:sourcemap => true} : sass_options
sourcemap = (environment == :production) ? false : true

# If you prefer the indented syntax, you might want to regenerate this
# project again passing --syntax sass, or you can uncomment this:
# preferred_syntax = :sass
# and then run:
# sass-convert -R --from scss --to sass sass scss && rm -rf sass && mv scss sass
