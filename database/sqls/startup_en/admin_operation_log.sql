create table admin_operation_log
(
    id         int unsigned auto_increment
        primary key,
    user_id    int          not null,
    path       varchar(255) not null,
    method     varchar(10)  not null,
    ip         varchar(255) not null,
    input      text         not null,
    created_at timestamp    null,
    updated_at timestamp    null
)
    collate = utf8mb4_unicode_ci;

create index admin_operation_log_user_id_index
    on admin_operation_log (user_id);

INSERT INTO startup_en.admin_operation_log (user_id, path, method, ip, input, created_at, updated_at) VALUES (1, 'backend/auth/menu', 'GET', '127.0.0.1', '[]', '2024-09-08 10:26:59', '2024-09-08 10:26:59');
INSERT INTO startup_en.admin_operation_log (user_id, path, method, ip, input, created_at, updated_at) VALUES (1, 'backend/news', 'GET', '127.0.0.1', '{"_pjax":"#pjax-container"}', '2024-09-08 10:27:01', '2024-09-08 10:27:01');
INSERT INTO startup_en.admin_operation_log (user_id, path, method, ip, input, created_at, updated_at) VALUES (1, 'backend/news/651/edit', 'GET', '127.0.0.1', '{"_pjax":"#pjax-container"}', '2024-09-08 10:27:06', '2024-09-08 10:27:06');
INSERT INTO startup_en.admin_operation_log (user_id, path, method, ip, input, created_at, updated_at) VALUES (1, 'backend', 'GET', '127.0.0.1', '[]', '2024-09-09 10:31:18', '2024-09-09 10:31:18');
INSERT INTO startup_en.admin_operation_log (user_id, path, method, ip, input, created_at, updated_at) VALUES (1, 'backend/news', 'GET', '127.0.0.1', '{"_pjax":"#pjax-container"}', '2024-09-09 10:31:21', '2024-09-09 10:31:21');
