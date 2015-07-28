# ~/.Guardfile

# More info at https://github.com/guard/guard#readme

notification :off

puts "Using guard to watch cahnges in Drupal theme."

group :development do

  # Only run Compass if we have a config.rb file in place.
  if File.exists?("./config.rb")
    # Compile on start.
    puts `compass compile --time --quiet`
    # https://github.com/guard/guard-compass
    guard :compass do
      watch(%r{(.*)\.s[ac]ss$})
    end
  end

  ## Uncomment this if you wish to clear the theme registry every time you
  ## change one of the relevant theme files.

  # Uncomment if you are building a Drupal theme.
  # On every theme file change, it clears .info cache and rebuild there registry.
  # Requires Drush.
  if Dir.glob("*.info").any?
    guard :shell do
      puts 'Monitoring theme files.'

      watch(%r{.+\.(php|inc|info)$}) { |m|
        puts 'Change detected: ' + m[0]
        `drush cache-clear theme-registry`
        puts 'Cleared theme registry.'
        #  `drush php-eval "system_rebuild_theme_data();"`
        #  puts 'Cleared info caches.'
      }
    end
  end

  ## Look for specified files in the current and child directories.
  ## `find` requires Ruby 1.9 or greater.
  # require 'find'
  # https://github.com/guard/guard-livereload.
  #if Find.find(Dir.pwd).detect{|dir|dir=~/.+\.(css|js|html?|php|inc|theme)$/}
    guard :livereload do
      watch(%r{.+\.(css|js|html?|png|jpg|jpeg|gif|svg|ico|php|inc|theme)$})
    end
  #end

end
