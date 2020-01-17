git gc --auto --aggressive
git submodule foreach git gc --auto --aggressive
git gc --aggressive
git submodule foreach git gc --aggressive
git reflog expire --all --expire=now
git gc --prune=now --aggressive
git rebase --skip
git submodule foreach git rebase --skip
git submodule foreach reflog expire --all --expire=now
git submodule foreach git gc --prune=now --aggressive
read -p "Press [Enter] key to exit..."

