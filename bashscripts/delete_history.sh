git checkout --orphan temp_branch
git add -A
git commit -am "the first commit"
git branch -D master
git branch -m master
git push -f origin master

git submodule foreach git checkout --orphan temp_branch
git submodule foreach git add -A
git submodule foreach git commit -am "the first commit"
git submodule foreach git branch -D master
git submodule foreach git branch -m master
git submodule foreach git push -f origin master
