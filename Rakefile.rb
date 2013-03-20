
task :default => [
    :update_repository ,
    :run_migrations
]

task :update_repository do
  puts "============= UPDATING REPOSITORY ============="
  cmd = "git pull"
  sh cmd
end

task :run_migrations do
  puts "============= RUNNING MIGRATIONS ============="
  cmd = "./vendor/bin/phinx migrate"
  sh cmd
end
