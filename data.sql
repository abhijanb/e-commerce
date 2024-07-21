CREATE TABLE Electronics (
    Brand VARCHAR(50),
    ModelName VARCHAR(100),
    Category VARCHAR(50),
    Price DECIMAL(10, 2),
    ScreenSize DECIMAL(4, 1),
    Color VARCHAR(20),
    StorageSize INT,
    CPUModel VARCHAR(50),
    RamMemoryInstalledSize INT,
    OperatingSystem VARCHAR(50),
    SpecialFeatures VARCHAR(100),
    ReleaseDate DATE
);

INSERT INTO Electronics (
    Brand, 
    ModelName, 
    Category, 
    Price, 
    ScreenSize, 
    Color, 
    StorageSize, 
    CPUModel, 
    RamMemoryInstalledSize, 
    OperatingSystem, 
    SpecialFeatures, 
    ReleaseDate
) VALUES (
    'ExampleBrand', 
    'ExampleModel', 
    'Smartphone', 
    999.99, 
    6.5, 
    'Black', 
    128, 
    'ExampleCPU', 
    8, 
    'ExampleOS', 
    'Water Resistant', 
    '2023-09-15'
);



CREATE TABLE Clothes (
    Brand VARCHAR(50),
    ModelName VARCHAR(100),
    Size VARCHAR(10),
    Color VARCHAR(20),
    Material VARCHAR(50),
    Price DECIMAL(10, 2),
    Gender VARCHAR(10),
    Category VARCHAR(50),
    SpecialFeatures VARCHAR(100)
);

INSERT INTO Clothes (
    Brand, 
    ModelName, 
    Size, 
    Color, 
    Material, 
    Price, 
    Gender, 
    Category, 
    SpecialFeatures
) VALUES (
    'ExampleBrand', 
    'ExampleModel', 
    'M', 
    'Blue', 
    'Cotton', 
    29.99, 
    'Unisex', 
    'T-Shirt', 
    'Organic Cotton'
);
