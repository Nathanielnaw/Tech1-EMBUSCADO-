-- TFA2 sample data. Re-running preserves rows with the same ID or username.
USE `pos_db`;

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
    (1, 'Maria Santos', 'maria.santos@example.com', '+63 917 555 0101', '2026-10-01 09:00:00'),
    (2, 'James Carter', 'james.carter@example.com', '+63 918 555 0102', '2026-10-01 09:15:00'),
    (3, 'Aisha Rahman', 'aisha.rahman@example.com', '+63 919 555 0103', '2026-10-01 09:30:00'),
    (4, 'Daniel Lee', 'daniel.lee@example.com', '+63 920 555 0104', '2026-10-01 09:45:00'),
    (5, 'Sofia Garcia', 'sofia.garcia@example.com', '+63 921 555 0105', '2026-10-01 10:00:00')
ON DUPLICATE KEY UPDATE `id` = `id`;

INSERT INTO `users` (`id`, `username`, `full_name`, `created_at`) VALUES
    (1, 'mrivera', 'Miguel Rivera', '2026-10-01 08:00:00'),
    (2, 'lchen', 'Lena Chen', '2026-10-01 08:15:00'),
    (3, 'apatel', 'Arjun Patel', '2026-10-01 08:30:00'),
    (4, 'jwilson', 'Jordan Wilson', '2026-10-01 08:45:00'),
    (5, 'nreyes', 'Nina Reyes', '2026-10-01 09:00:00')
ON DUPLICATE KEY UPDATE `id` = `id`;
