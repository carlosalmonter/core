
task :default => [
    :update_repository ,
    :run_migrations
]

task :update_repository do
  cmd = "git pull"
  sh cmd
end

task :run_migrations do
  cmd = ".\vendor\bin\phinx migrate"
  sh cmd
end
