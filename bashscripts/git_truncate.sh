#!/bin/bash
git checkout --orphan newBranch
git add -A  # Add all files and commit them
git commit -m "Truncated history"
git branch -D master  # Deletes the master branch
git branch -m master  # Rename the current branch to master
git push -f origin master  # Force push master branch to github
git gc --aggressive --prune=all     # remove the old files

git submodule foreach git checkout --orphan newBranch
git submodule foreach git add -A  # Add all files and commit them
git submodule foreach git commit -m "Truncated history"
git submodule foreach git branch -D master  # Deletes the master branch
git submodule foreach git branch -m master  # Rename the current branch to master
git submodule foreach git push -f origin master  # Force push master branch to github
git submodule foreach git gc --aggressive --prune=all     # remove the old files

rm -rf .git/refs/original/
git reflog expire --expire=now --all
git gc --aggressive --prune=now
git submodule foreach git reflog expire --expire=now --all
git submodule foreach git gc --aggressive --prune=now

