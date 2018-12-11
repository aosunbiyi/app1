CREATE TABLE discount_plans(
    id INT AUTO_INCREMENT PRIMARY KEY,
    plan_name VARCHAR(200),
    plan_category VARCHAR(200),
    note TEXT,
    created DATETIME,
    modified DATETIME
);


CREATE TABLE payment_methods(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE reservations(
    id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_number VARCHAR(250) NOT NULL,
    code VARCHAR(250) NOT NULL,
    arrival DATETIME,
    arrival_time VARCHAR(250),
    departure DATETIME,
    departure_time VARCHAR(250),
    num_of_night INT,
    num_of_adult INT,
    num_of_children INT,
    account_id INT NOT NULL,
    book_by VARCHAR(500),
    book_on DATETIME,
    business_source_id INT,
    total_booking DECIMAL(18, 2),
    amount_paid DECIMAL(18, 2),
    balance DECIMAL(18, 2),
    reservation_status VARCHAR(150),
    account_number VARCHAR(200), 
    apply_discount TINYINT(4), 
    bank_name VARCHAR(200), 
    branch_name VARCHAR(200), 
    cheque VARCHAR(200), 
    discount_code VARCHAR(200), 
    discount_plan INT,  
    discount_value DECIMAL(20,2),
    discount_amount DECIMAL(20,2),
    payment_status  VARCHAR(200),
    last_payment_id  INT,
    total_amount_with_discount DECIMAL(20,2),
    total_balance_with_discount DECIMAL(20,2),
    FOREIGN KEY accounts__key_233320(account_id) REFERENCES accounts(id),
    FOREIGN KEY business_source_id_key_50909(business_source_id) REFERENCES business_sources(id),
    FOREIGN KEY discount_plan__key_2333909008(discount_plan) REFERENCES discount_plans(id),
    created DATETIME,
    modified DATETIME

);

CREATE TABLE transportation_types(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(300),
    created DATETIME,
    modified DATETIME

);

CREATE TABLE transportations(
    id INT AUTO_INCREMENT PRIMARY KEY,
    transportation_type_id INT NOT NULL,
    name VARCHAR(300),
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY transportation_type_id_key_50909(transportation_type_id) REFERENCES transportation_types(id)
);

CREATE TABLE transportaion_statitions(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(300),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE arrival_departure_infos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT NOT NULL,
    transaction_type VARCHAR(300),
    pickup_date DATETIME,
    pickup_time VARCHAR(200),
    FOREIGN KEY reservations__key_2354320(reservation_id) REFERENCES reservations(id)

);

CREATE TABLE reserved_rooms(
    id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT NOT NULL,
    serial_number VARCHAR(250),
    room_type_id INT NOT NULL,
    room_id INT NOT NULL,
    room_type_name VARCHAR(200),
    room_name VARCHAR(200),
    original_owner VARCHAR(500),
    transfer_owner VARCHAR(500),
    reserved_status VARCHAR(200),
    arrival DATETIME,
    arrival_time VARCHAR(250),
    departure DATETIME,
    departure_time VARCHAR(250),
    num_of_night INT,
    new_account_id INT,
    discount_plan_id INT,
    discount_value DECIMAL(20, 2),
    total DECIMAL(20, 2),
    paid DECIMAL(20, 2),
    balance DECIMAL(20, 2),
    status VARCHAR(200),
    num_of_adult INT,
    num_of_children INT,
    FOREIGN KEY reservations__key_233320(reservation_id) REFERENCES reservations(id),
    FOREIGN KEY roomss__key_233320(room_id) REFERENCES rooms(id),
    created DATETIME,
    modified DATETIME

);

CREATE TABLE reservation_transaction(
    id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT NOT NULL,
    reserved_room_id INT NOT NULL,
    rate DECIMAL(20, 2),
    total DECIMAL(20, 2),
    total_reservation DECIMAL(20, 2),
    total_adult DECIMAL(20, 2),
    total_children DECIMAL(20, 2),
    paid DECIMAL(20, 2),
    balance DECIMAL(20, 2),
    transaction_date DATETIME,
    status VARCHAR(120),
    payment_method VARCHAR(200)  NULL,
    room_name  VARCHAR(200),
    room_Type  VARCHAR(200),
    rate_type VARCHAR(200),
    rate_name VARCHAR(200), 
    FOREIGN KEY reservations__key_2333909(reservation_id) REFERENCES reservations(id),
    FOREIGN KEY reserved_rooms__key_2333909(reserved_room_id) REFERENCES reserved_rooms(id),
    created DATETIME,
    modified DATETIME

);

CREATE TABLE reservation_payments(
    id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT NOT NULL,
    total_amount DECIMAL(20, 2),
    paid DECIMAL(20, 2),
    balance DECIMAL(20, 2),
    transaction_date DATETIME,
    status VARCHAR(120),
    payment_method VARCHAR(200)  NULL,
    transaction_type VARCHAR(200),
    on_discount  TINYINT(4),
    discount_type  INT,
    discount_name VARCHAR(200),
    discount_value  DECIMAL(20,2),
    total_amount_with_discount DECIMAL(20,2),
    FOREIGN KEY reservations__key_23339100(reservation_id) REFERENCES reservations(id),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE reservation_log_entries(
    id INT AUTO_INCREMENT PRIMARY KEY,
    reservation_id INT NOT NULL,
    reserved_room_id INT NOT NULL,
    action VARCHAR(750),
    log_date DATETIME,
    created DATETIME,
    modified DATETIME
);


////////  Laundry

CREATE TABLE laundry_services(
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_name VARCHAR(250) NOT NULL,
    service_image  VARCHAR(350),
    description TEXT,
    created DATETIME,
    modified DATETIME
);


CREATE TABLE  laundry_item_categories(
    id INT AUTO_INCREMENT  PRIMARY KEY,
    category_name VARCHAR(200) NOT NULL,
    description TEXT,
    category_image VARCHAR(350),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE laundry_packaging_types(
    id INT AUTO_INCREMENT  PRIMARY KEY,
    packaging_name VARCHAR(250),
    packaging_image VARCHAR(350),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE laundry_items(
    id INT AUTO_INCREMENT PRIMARY KEY,
    item_name  VARCHAR(250),
    code VARCHAR(250),
    laundry_item_category_id int,
    FOREIGN KEY  item_category__key_2993100(laundry_item_category_id) REFERENCES laundry_item_categories(id),
    item_type VARCHAR(250),
    charges DECIMAL(20,2),
    description TEXT,
    created DATETIME,
    modified DATETIME
);


CREATE TABLE laundry_items_laundry_services(
    laundry_item_id INT NOT NULL,
    laundry_service_id INT NOT NULL,
    PRIMARY KEY(laundry_item_id,laundry_service_id),
    FOREIGN KEY laundry_item_key6700(laundry_item_id) REFERENCES laundry_items(id),
    FOREIGN KEY laundry_service_key9800(laundry_service_id)  REFERENCES laundry_services(id)
);

CREATE TABLE laundry_hotel_services(
    id INT AUTO_INCREMENT PRIMARY KEY,
    service_name  VARCHAR(250) NOT NULL,
    description TEXT,
    extra_charges  DECIMAL(20,2),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE laundry_guest_laundry_transactions(
    id INT AUTO_INCREMENT  PRIMARY KEY,
    code  VARCHAR(200),
    room_id int NOT NULL,
    account_id int NOT NULL,
    transaction_date DATETIME,
    transaction_time VARCHAR(200),
    delivery_date DATETIME,
    delivery_time  VARCHAR(100),
    laundry_packaging_type_id INT NOT NULL,
    laundry_service_id   INT NOT NULL,
    laundry_hotel_service_id INT NOT NULL,
    total_charges  DECIMAL(20,2),
    status VARCHAR(200),
    FOREIGN KEY  account_key560989(account_id) REFERENCES accounts(id),
    FOREIGN KEY  room_key678543(room_id) REFERENCES rooms(id),
    FOREIGN KEY  laundry_packaging_type_key45900(laundry_packaging_type_id) REFERENCES laundry_packaging_types(id),
    FOREIGN KEY  laundry_service_key457889(laundry_service_id) REFERENCES laundry_services(id),
    FOREIGN KEY  laundry_hotel_services_key126754(laundry_hotel_service_id) REFERENCES laundry_hotel_services(id),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE laundry_guest_laundry_transaction_items(
    id INT AUTO_INCREMENT PRIMARY KEY,
    laundry_guest_laundry_transaction_id INT NOT NULL,
    laundry_item_id INT NOT NULL,
    quantity  INT,
    charges DECIMAL(20,2),
    total_charges  DECIMAL(20,2),
    status  VARCHAR(200),
    FOREIGN KEY  laundry_guest_laundry_transaction_key90887(laundry_guest_laundry_transaction_id) REFERENCES laundry_guest_laundry_transactions(id),
    FOREIGN KEY  laundry_item_key908654(laundry_item_id) REFERENCES laundry_items(id),
    created DATETIME,
    modified DATETIME
);



CREATE TABLE laundry_hotel_laundry_transactions(
    id INT AUTO_INCREMENT  PRIMARY KEY,
    code  VARCHAR(200),
    transaction_date DATETIME,
    transaction_time VARCHAR(200),
    delivery_date DATETIME,
    delivery_time  VARCHAR(100),
    laundry_packaging_type_id INT NOT NULL,
    laundry_service_id   INT NOT NULL,
    laundry_hotel_service_id INT NOT NULL,
    status VARCHAR(200),
    FOREIGN KEY  laundry_packaging_type_key456750(laundry_packaging_type_id) REFERENCES laundry_packaging_types(id),
    FOREIGN KEY  laundry_service_key4453289(laundry_service_id) REFERENCES laundry_services(id),
    FOREIGN KEY  laundry_hotel_services_key0008654(laundry_hotel_service_id) REFERENCES laundry_hotel_services(id),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE laundry_hotel_laundry_transaction_items(
    id INT AUTO_INCREMENT PRIMARY KEY,
    laundry_guest_laundry_transaction_id INT NOT NULL,
    laundry_item_id INT NOT NULL,
    quantity  INT,
    status  VARCHAR(200),
    FOREIGN KEY  laundry_guest_laundry_transaction_key900077(laundry_guest_laundry_transaction_id) REFERENCES laundry_guest_laundry_transactions(id),
    FOREIGN KEY  laundry_item_key876543(laundry_item_id) REFERENCES laundry_items(id),
    created DATETIME,
    modified DATETIME
);
