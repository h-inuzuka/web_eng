drop table if exists posts;
create table posts 
(
    id integer primary key not null,
    nickname text not null,
    body text not null,
    created_at text not null,
    updated_at text not null
);