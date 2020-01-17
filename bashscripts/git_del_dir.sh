git filter-branch --force --index-filter "git rm --cached -r --ignore-unmatch public_html/themes/*" --prune-empty --tag-name-filter cat -- --all
rm -Rf .git/refs/original
rm -Rf .git/logs/
git gc --aggressive --prune=now
git count-objects -v