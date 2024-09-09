create table admin_roles
(
    id         int unsigned auto_increment
        primary key,
    name       varchar(50) not null,
    slug       varchar(50) not null,
    created_at timestamp   null,
    updated_at timestamp   null,
    constraint admin_roles_name_unique
        unique (name),
    constraint admin_roles_slug_unique
        unique (slug)
)
    collate = utf8mb4_unicode_ci;

INSERT INTO startup_en.admin_roles (name, slug, created_at, updated_at) VALUES ('Administrator', 'administrator', '2024-08-31 23:51:34', '2024-08-31 23:51:34');
INSERT INTO startup_en.admin_roles (name, slug, created_at, updated_at) VALUES ('User', 'user', '2024-09-03 20:00:31', '2024-09-03 20:00:31');
