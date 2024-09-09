create table migrations
(
    id        int unsigned auto_increment
        primary key,
    migration varchar(255) not null,
    batch     int          not null
)
    collate = utf8mb4_unicode_ci;

INSERT INTO startup_en.migrations (migration, batch) VALUES ('2014_10_12_000000_create_users_table', 1);
INSERT INTO startup_en.migrations (migration, batch) VALUES ('2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO startup_en.migrations (migration, batch) VALUES ('2016_01_04_173148_create_admin_tables', 1);
INSERT INTO startup_en.migrations (migration, batch) VALUES ('2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO startup_en.migrations (migration, batch) VALUES ('2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO startup_en.migrations (migration, batch) VALUES ('2024_08_28_143046_create_ip_ieit_news', 1);
INSERT INTO startup_en.migrations (migration, batch) VALUES ('2024_08_28_143054_create_ip_ieit_stories', 1);
