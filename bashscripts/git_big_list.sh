#git gc --force
git rev-list --objects --all | sort -k 2 > ./logs/allfileshas.txt
git verify-pack -v .git/objects/pack/pack-*.idx | egrep "^\w+ blob\W+[0-9]+ [0-9]+ [0-9]+$" | sort -k 3 -n -r > ./logs/bigobjects.txt
for SHA in `cut -f 1 -d\  < ./logs/bigobjects.txt`; do
	echo $(grep $SHA ./logs/bigobjects.txt) $(grep $SHA ./logs/allfileshas.txt) | awk '{print $1,$3,$7}' >> ./logs/bigtosmall.txt
done;
for SHA in `cut -f 1 -d\  < ./logs/bigobjects.txt`; do
	echo $(grep $SHA ./logs/bigobjects.txt) $(grep $SHA ./logs/allfileshas.txt) | cut -d ' ' -f'1,3,7-' >> ./logs/bigtosmall.txt
done;