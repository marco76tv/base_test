git filter-branch --force --index-filter "git rm --cached --ignore-unmatch *.mp4" --prune-empty --tag-name-filter cat -- --all
rm -Rf .git/refs/original
rm -Rf .git/logs/
git gc --aggressive --prune=now
git count-objects -v