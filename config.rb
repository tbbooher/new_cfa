#require 'bootstrap-sass'
#require 'font-awesome-sass'

http_path   = "/"         #root level target path
css_dir     = "."           #targets our default style.css file at the root level of our theme
sass_dir    = "sass"       #targets our sass directory
images_dir  = "img"   #targets our pre existing image directory
javascripts_dir = "js"  #targets our JavaScript directory

# You can select your preferred output style here (can be overridden via the command line):
output_style = :expanded  # or :nested or :compact or :compressed

# To enable relative paths to assets via compass helper functions.
# note: this is important in wordpress themes for sprites

relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = true

# Obviously
preferred_syntax = :scss
css_dir = "." # by Compass.app 
sass_dir = "sass" # by Compass.app 
images_dir = "img" # by Compass.app 
output_style = :nested # by Compass.app 
relative_assets = true # by Compass.app 
line_comments = true # by Compass.app 
sass_options = {:debug_info=>false} # by Compass.app 
sourcemap = false # by Compass.app 