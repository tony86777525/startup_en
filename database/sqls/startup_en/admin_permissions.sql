create table admin_permissions
(
    id          int unsigned auto_increment
        primary key,
    name        varchar(50)  not null,
    slug        varchar(50)  not null,
    http_method varchar(255) null,
    http_path   text         null,
    created_at  timestamp    null,
    updated_at  timestamp    null,
    constraint admin_permissions_name_unique
        unique (name),
    constraint admin_permissions_slug_unique
        unique (slug)
)
    collate = utf8mb4_unicode_ci;

INSERT INTO startup_en.admin_permissions (name, slug, http_method, http_path, created_at, updated_at) VALUES ('All permission', '*', '', '*', null, null);
INSERT INTO startup_en.admin_permissions (name, slug, http_method, http_path, created_at, updated_at) VALUES ('Dashboard', 'dashboard', 'GET', '/', null, null);
INSERT INTO startup_en.admin_permissions (name, slug, http_method, http_path, created_at, updated_at) VALUES ('Login', 'auth.login', '', '/auth/login
/auth/logout', null, null);
INSERT INTO startup_en.admin_permissions (name, slug, http_method, http_path, created_at, updated_at) VALUES ('User setting', 'auth.setting', 'GET,PUT', '/auth/setting', null, null);
INSERT INTO startup_en.admin_permissions (name, slug, http_method, http_path, created_at, updated_at) VALUES ('Auth management', 'auth.management', '', '/auth/roles
/auth/permissions
/auth/menu
/auth/logs', null, null);
