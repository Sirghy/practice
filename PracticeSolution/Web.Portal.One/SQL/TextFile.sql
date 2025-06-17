-- Table SPcMake
CREATE TABLE SPcMake (
    ID INT IDENTITY(1,1) PRIMARY KEY,
    Name VARCHAR(300) NOT NULL
);

-- Table SCompanyes
CREATE TABLE SCompanyes (
    ID INT IDENTITY(1,1) PRIMARY KEY,
    Name VARCHAR(100) NOT NULL
);

-- Table SPendingOrders
CREATE TABLE SPendingOrders (
    ID UNIQUEIDENTIFIER PRIMARY KEY DEFAULT NEWID(),
    ScheduledDate DATETIME NOT NULL,
    SentDate DATETIME NULL,
    IdMake INT NOT NULL,
    IdCompany INT NOT NULL,
    Price MONEY NOT NULL,
    Quantity INT NOT NULL DEFAULT 1,

    FOREIGN KEY (IdMake) REFERENCES SPcMake(ID),
    FOREIGN KEY (IdCompany) REFERENCES SCompanyes(ID)
);

--- INSERTS
INSERT INTO SPcMake (Name) VALUES
('Dell OptiPlex 3080 Micro Desktop - Intel Core i5-10500T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Lenovo ThinkCentre M70s Gen 5 SFF - Intel Core i7-14700, 16GB DDR5 RAM, 512GB SSD, Windows 11 Pro'),
('HP EliteDesk 800 G6 Mini - Intel Core i5-10500T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Acer Veriton N4640G - Intel Core i5-10400T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Fujitsu Esprimo Q958 - Intel Core i5-10500T, 8GB RAM, 512GB SSD, Windows 10 Pro'),
('Dell OptiPlex 7080 Micro Desktop - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Lenovo ThinkCentre M90n-1 Nano - Intel Core i5-10510U, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('HP ProDesk 400 G6 Mini - Intel Core i5-9500T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Acer Veriton N4660G - Intel Core i5-10500T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Fujitsu Esprimo Q957 - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Dell OptiPlex 7090 Micro Desktop - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Lenovo ThinkCentre M90n-1 Nano - Intel Core i5-10510U, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('HP EliteDesk 800 G7 Mini - Intel Core i5-10500T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Acer Veriton N4670G - Intel Core i5-10500T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Fujitsu Esprimo Q958 - Intel Core i5-10500T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Dell OptiPlex 7080 Micro Desktop - Intel Core i5-10500T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Lenovo ThinkCentre M70s Gen 5 SFF - Intel Core i5-14400, 16GB DDR5 RAM, 512GB SSD, Windows 11 Pro'),
('HP ProDesk 400 G6 Mini - Intel Core i5-9500T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Acer Veriton N4640G - Intel Core i5-10400T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Fujitsu Esprimo Q957 - Intel Core i7-10700T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Dell OptiPlex 7090 Micro Desktop - Intel Core i5-10500T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Lenovo ThinkCentre M90n-1 Nano - Intel Core i5-10510U, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('HP EliteDesk 800 G7 Mini - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Acer Veriton N4670G - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Fujitsu Esprimo Q958 - Intel Core i5-10500T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Dell OptiPlex 7080 Micro Desktop - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Lenovo ThinkCentre M70s Gen 5 SFF - Intel Core i5-14400, 8GB DDR5 RAM, 256GB SSD, Windows 11 Pro'),
('HP ProDesk 400 G6 Mini - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Acer Veriton N4640G - Intel Core i5-10500T, 8GB RAM, 512GB SSD, Windows 10 Pro'),
('Fujitsu Esprimo Q957 - Intel Core i5-10500T, 8GB RAM, 512GB SSD, Windows 10 Pro'),
('Dell OptiPlex 7090 Micro Desktop - Intel Core i5-10500T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Lenovo ThinkCentre M90n-1 Nano - Intel Core i5-10510U, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('HP EliteDesk 800 G7 Mini - Intel Core i5-10500T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Acer Veriton N4670G - Intel Core i5-10500T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Fujitsu Esprimo Q958 - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Dell OptiPlex 7080 Micro Desktop - Intel Core i7-10700T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Lenovo ThinkCentre M70s Gen 5 SFF - Intel Core i5-14400, 8GB DDR5 RAM, 512GB SSD, Windows 11 Pro'),
('HP ProDesk 400 G6 Mini - Intel Core i5-9500T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Acer Veriton N4640G - Intel Core i5-10400T, 8GB RAM, 512GB SSD, Windows 10 Pro'),
('Fujitsu Esprimo Q957 - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Dell OptiPlex 7090 Micro Desktop - Intel Core i5-10500T, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('Lenovo ThinkCentre M90n-1 Nano - Intel Core i5-10510U, 8GB RAM, 256GB SSD, Windows 10 Pro'),
('HP EliteDesk 800 G7 Mini - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Acer Veriton N4670G - Intel Core i7-10700T, 16GB RAM, 512GB SSD, Windows 10 Pro'),
('Fujitsu Esprimo Q958 - Intel Core i5-10500T, 16GB RAM, 512GB SSD, Windows 10 Pro');


INSERT INTO SCompanyes (Name) VALUES
('Oracle Corp'),
('Orc Comp'),
('JetBrains'),
('Wallmart Supercenter'),
('METRO'),
('Geico'),
('Piaterocica');


INSERT INTO SPendingOrders (ID, ScheduledDate, SentDate, IdMake, IdCompany, Price, Quantity) VALUES

('1cdcfb4f-c7ff-4e2f-92a7-0bc48a3f13d7', DATEADD(DAY, 3, GETDATE()), NULL, 2, 5, 3322.11, 5),
('9e5d6e80-14f8-4e2c-a2e4-84b16115df52', DATEADD(DAY, 3, GETDATE()), NULL, 14, 3, 4043.5, 7),
('20d9b5cb-108e-40d4-9b7f-cf734a56cb8c', DATEADD(DAY, 3, GETDATE()), NULL, 3, 4, 3389.76, 6),
('6314202d-7bb6-452a-b670-93a3fdf36f5f', DATEADD(DAY, 3, GETDATE()), NULL, 3, 6, 3413.37, 1),
('28e9de08-0b8e-4028-b934-b7b8726d5b50', DATEADD(DAY, 3, GETDATE()), NULL, 9, 2, 1253.94, 9),
('61a31cb2-fec3-4efc-a09b-75b93f7f3426', DATEADD(DAY, 3, GETDATE()), NULL, 6, 3, 3370.36, 5),
('03c470ce-85e4-49d8-abc4-5d207ff18fa7', DATEADD(DAY, 3, GETDATE()), NULL, 4, 2, 2311.3, 10),
('c70e253b-9a5e-4b44-a28e-f882c68e37e2', DATEADD(DAY, 3, GETDATE()), NULL, 6, 7, 1965.3, 9),
('9978cce1-567b-4d80-8f27-49310149cb89', DATEADD(DAY, 3, GETDATE()), DATEADD(DAY, 3, GETDATE()), 10, 3, 3255.15, 9),
('fbbddcc5-b21d-4d1e-90c0-7cf1069b58ac', DATEADD(DAY, 3, GETDATE()), NULL, 5, 6, 3059.34, 2),
('3b6c11a5-89e2-4555-84b1-9683cfecfbb3', DATEADD(DAY, 3, GETDATE()), NULL, 2, 5, 1671.61, 6),
('b4e1d9c0-0ee7-42cd-a5a7-6376a31c91d5', DATEADD(DAY, 3, GETDATE()), NULL, 11, 4, 3313.83, 1),
('eb2a24eb-7b20-4ab0-b5ff-0738583453b7', DATEADD(DAY, 3, GETDATE()), NULL, 6, 2, 2993.45, 7),
('63b8ef41-78c1-4b13-9c7f-bb41718a6ce3', DATEADD(DAY, 3, GETDATE()), NULL, 19, 6, 3107.64, 10),
('16e7a22f-eef9-4c1f-bdbf-3d229e79be49', DATEADD(DAY, 3, GETDATE()), NULL, 13, 7, 2401.57, 5),
('1b7d287f-78ff-462d-a330-fd6b63eb20b7', DATEADD(DAY, 3, GETDATE()), NULL, 5, 2, 2382.47, 2),
('1ea78cf1-260e-4c43-b5c0-d1304f0c0eeb', DATEADD(DAY, 3, GETDATE()), DATEADD(DAY, 3, GETDATE()), 2, 1, 1803.8, 8),
('ca3e1cfd-2398-4221-a167-e7001764f870', DATEADD(DAY, 3, GETDATE()), NULL, 10, 5, 1697.39, 3),
('c7f8ab8d-324b-40f2-9396-9470a98fe69a', DATEADD(DAY, 3, GETDATE()), NULL, 18, 1, 4043.21, 9),
('b97e3ab3-f95e-4cb0-84e3-2f2a308a4ba2', DATEADD(DAY, 3, GETDATE()), NULL, 3, 4, 3046.02, 5),
('1d134016-b1a3-44ed-bbcf-7d51be4ea261', DATEADD(DAY, 3, GETDATE()), NULL, 36, 5, 1826.47, 10),
('a65f4fe6-7e0c-4c2f-9067-420b94d96c31', DATEADD(DAY, 3, GETDATE()), NULL, 4, 6, 4286.52, 4),
('5f1d66d2-40f6-4dd5-bd46-6f4bfb4d27b0', DATEADD(DAY, 3, GETDATE()), NULL, 23, 4, 1810.77, 7),
('ef5d1173-60ab-4643-b886-e29c61402433', DATEADD(DAY, 3, GETDATE()), NULL, 31, 6, 3503.4, 7),
('c2c3c3df-0672-4d41-9ff5-1cb3d586e8d2', DATEADD(DAY, 3, GETDATE()), NULL, 40, 6, 2823.35, 3),
('f8acfd9c-ff78-4e55-bbab-c19a0f07f7f2', DATEADD(DAY, 3, GETDATE()), DATEADD(DAY, 3, GETDATE()), 19, 2, 4023.66, 1),
('1a37d0f4-3b2e-44f9-a19a-7053a77eb889', DATEADD(DAY, 3, GETDATE()), NULL, 38, 1, 4682.92, 6),
('97eaa9ae-3131-421f-8fe1-bb964bc2e29d', DATEADD(DAY, 3, GETDATE()), NULL, 7, 5, 2842.76, 8),
('e3f68e46-4b03-4c48-878b-3390b1c4ab2f', DATEADD(DAY, 3, GETDATE()), NULL, 30, 1, 3899.9, 5),
('df99ef5e-478b-47fa-aec6-4e8c97366f2b', DATEADD(DAY, 3, GETDATE()), NULL, 44, 1, 2511.09, 3),
('54e6f0f2-112a-48a2-a539-30a41f3f9ab4', DATEADD(DAY, 3, GETDATE()), NULL, 10, 4, 3609.68, 3),
('6fa00de4-77d2-43e8-b705-3e5895466b1d', DATEADD(DAY, 3, GETDATE()), NULL, 5, 5, 2881.21, 6),
('09eac701-2875-408e-a4a6-30655e913944', DATEADD(DAY, 3, GETDATE()), NULL, 22, 2, 4294.74, 3),
('d19574ed-e8a9-4f85-8d1e-8be8f1783c1a', DATEADD(DAY, 3, GETDATE()), NULL, 43, 4, 4281.63, 3),
('d4c879e0-65cb-4439-8a87-bc6f7d50f816', DATEADD(DAY, 3, GETDATE()), NULL, 20, 5, 2871.57, 6),
('552b2dc1-c897-4d10-9d65-07bb827a61d2', DATEADD(DAY, 3, GETDATE()), NULL, 9, 5, 3637.38, 3),
('99c3828f-c105-48f5-a190-69db9e1cd81e', DATEADD(DAY, 3, GETDATE()), NULL, 6, 2, 3421.7, 1),
('20a3cd58-b201-4be0-a8bb-177d426a3c62', DATEADD(DAY, 3, GETDATE()), NULL, 41, 4, 4065.38, 2),
('c2a1e361-97c0-4043-a234-8ac57600883e', DATEADD(DAY, 3, GETDATE()), NULL, 28, 7, 4096.48, 3),
('1953000a-df26-4396-933d-8471c5e56a1c', DATEADD(DAY, 3, GETDATE()), DATEADD(DAY, 3, GETDATE()), 12, 6, 4377.02, 1),
('81e91449-21cb-4435-96c9-1cf304b36de0', DATEADD(DAY, 3, GETDATE()), NULL, 28, 3, 1669.57, 9),
('23fc6ca3-d1b4-4659-8c5d-293f2ff5b2eb', DATEADD(DAY, 3, GETDATE()), NULL, 18, 1, 3406.15, 5),
('7f72b682-e2a6-4b92-a98b-8501de40b15d', DATEADD(DAY, 3, GETDATE()), NULL, 29, 1, 3934.73, 9),
('a50d1e3a-5f2c-405f-93f2-c646bbfc5b8d', DATEADD(DAY, 3, GETDATE()), NULL, 8, 3, 2026.02, 5),
('0f3ed6f1-1e8e-4a01-82e7-0e221f421e80', DATEADD(DAY, 3, GETDATE()), NULL, 32, 5, 3673.9, 10),
('208f8d02-22b5-41c0-8733-11a692112754', DATEADD(DAY, 3, GETDATE()), NULL, 5, 2, 3923.41, 2);