create table admin_users
(
    id             int unsigned auto_increment
        primary key,
    username       varchar(190) not null,
    password       varchar(60)  not null,
    name           varchar(255) not null,
    avatar         varchar(255) null,
    remember_token varchar(100) null,
    created_at     timestamp    null,
    updated_at     timestamp    null,
    constraint admin_users_username_unique
        unique (username)
)
    collate = utf8mb4_unicode_ci;

INSERT INTO startup_en.admin_users (username, password, name, avatar, remember_token, created_at, updated_at) VALUES ('admin', '$2y$12$cVxZqPV06Ec6fRXCNImxO.vXCjNlr1AXPvv/5O7Qu9HoWwH.k4kUG', 'DC', 'images/DC.png', null, '2024-08-31 23:51:34', '2024-09-03 20:01:49');
INSERT INTO startup_en.admin_users (username, password, name, avatar, remember_token, created_at, updated_at) VALUES ('user', '$2y$12$RrEKuA0E1snnUuhs8Ly4.Ok8.QDDnaJ2BXnrd/IHRwKRpaeXth8nu', 'user1', 'images/蒙版组 1.png', null, '2024-09-03 19:59:56', '2024-09-03 19:59:56');
