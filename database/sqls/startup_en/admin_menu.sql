create table admin_menu
(
    id         int unsigned auto_increment
        primary key,
    parent_id  int default 0 not null,
    `order`    int default 0 not null,
    title      varchar(50)   not null,
    icon       varchar(50)   not null,
    uri        varchar(255)  null,
    permission varchar(255)  null,
    created_at timestamp     null,
    updated_at timestamp     null
)
    collate = utf8mb4_unicode_ci;

INSERT INTO startup_en.admin_menu (parent_id, `order`, title, icon, uri, permission, created_at, updated_at) VALUES (0, 1, 'Dashboard', 'fa-bar-chart', '/', null, null, null);
INSERT INTO startup_en.admin_menu (parent_id, `order`, title, icon, uri, permission, created_at, updated_at) VALUES (0, 2, 'Admin', 'fa-tasks', '', null, null, null);
INSERT INTO startup_en.admin_menu (parent_id, `order`, title, icon, uri, permission, created_at, updated_at) VALUES (2, 3, 'Users', 'fa-users', 'auth/users', null, null, null);
INSERT INTO startup_en.admin_menu (parent_id, `order`, title, icon, uri, permission, created_at, updated_at) VALUES (2, 4, 'Roles', 'fa-user', 'auth/roles', null, null, null);
INSERT INTO startup_en.admin_menu (parent_id, `order`, title, icon, uri, permission, created_at, updated_at) VALUES (2, 5, 'Permission', 'fa-ban', 'auth/permissions', null, null, null);
INSERT INTO startup_en.admin_menu (parent_id, `order`, title, icon, uri, permission, created_at, updated_at) VALUES (2, 6, 'Menu', 'fa-bars', 'auth/menu', null, null, null);
INSERT INTO startup_en.admin_menu (parent_id, `order`, title, icon, uri, permission, created_at, updated_at) VALUES (2, 7, 'Operation log', 'fa-history', 'auth/logs', null, null, null);
INSERT INTO startup_en.admin_menu (parent_id, `order`, title, icon, uri, permission, created_at, updated_at) VALUES (0, 8, 'News管理', 'fa-life-ring', 'news', null, '2024-09-01 00:09:58', '2024-09-08 10:14:58');
INSERT INTO startup_en.admin_menu (parent_id, `order`, title, icon, uri, permission, created_at, updated_at) VALUES (0, 9, 'Story管理', 'fa-life-ring', 'stories', null, '2024-09-01 00:10:20', '2024-09-08 10:15:05');
