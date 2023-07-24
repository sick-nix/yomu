# Todo

## Community

-   create community
-   follow community with user
-   view followed communities
-   view posts of followed communities
-   view posts of random communities (main page)

## Posts

-   create post on community (with and without following community)
-   like/dislike posts
-   comment on posts
-   comment on comments
-   like/dislike comments
-   show posts of deleted users
    -   allow user to choose wether to show or not his comments after deleting account

## User

-   change avatar
-   save visited posts history

## Search

-   search communities
-   search posts
-   ordering of comments/posts
    -   hot (equal ammount of likes/dislikes)
    -   popular (high amount of likes)
    -   latest (most recently created)

## Moderation

TBD
$table->foreignId('parent_id')->constrained('comments')->cascadeOnDelete();