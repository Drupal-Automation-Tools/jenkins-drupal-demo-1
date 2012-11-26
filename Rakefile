##
# @file Rakefile
# Rake helper tasks for the NavArts Drupal Demo site.
##



# Sets the default behavior of the `rake` command to output a list of tasks.
desc "Output a list of Rake tasks"
task :help do
  puts ''
  sh 'rake -T'
  puts ''
end
task :default => 'help'

# lifted from https://github.com/cloudhead/dorothy
# (Rakefile for the Toto blogging engine)
def ask message
  print message
  STDIN.gets.chomp
end
