git init 
git submodule init
git remote add origin https://bitbucket.org/team_foodx/food_lara
git pull origin master
./init.sh
git submodule update --init --checkout --force
./git_subs_pull.sh
./git_branch.sh
cd laravel
php composer.phar update
npm install -g bower
bower update --save --force
./git_subs_push.sh




