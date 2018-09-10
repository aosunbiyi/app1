

CREATE TABLE users(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    active  TINYINT(4),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE roles(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    role_name VARCHAR(255)  NOT NULL,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE users_roles(
    user_id INT NOT NULL,
    role_id INT NOT NULL,
    PRIMARY KEY(user_id,role_id),
    FOREIGN KEY user_key200(user_id) REFERENCES users(id),
    FOREIGN KEY role_key200(role_id)  REFERENCES roles(id)
);

CREATE TABLE configurations(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    start_date DATETIME,
    country_name VARCHAR(255),
    country_alias  VARCHAR(255),
    curr_sign VARCHAR(150),
    state_name VARCHAR(255),
    zip VARCHAR(255),
    financial_period_from_day INT,
    financial_period_from_month VARCHAR(255),
    financial_period_to_day  INT,
    financial_period_to_month  VARCHAR(255),
    created DATETIME,
    modified DATETIME

);

CREATE TABLE application_configurations(
    id INT AUTO_INCREMENT PRIMARY KEY,
    application_name VARCHAR(255),
    application_logo VARCHAR(255),
    login_banner VARCHAR(255),
    application_theme VARCHAR(255),
    created DATETIME,
    modified DATETIME

);

CREATE TABLE  property_details(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    property_name VARCHAR(255),
    beneficiary_name VARCHAR(255),
    property_type VARCHAR(255),
    property_grade VARCHAR(255),
    registration_number VARCHAR(255),
    logo VARCHAR(255),
    address1 VARCHAR(255),
    address2 VARCHAR(255),
    city VARCHAR(255),
    state VARCHAR(255),
    country VARCHAR(255),
    phone VARCHAR(255),
    fax VARCHAR(255),
    res_phone VARCHAR(255),
    email VARCHAR(255),
    website VARCHAR(255),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE week_days(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    day_name  VARCHAR(255),
    isweekday  TINYINT(4),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE rate_types(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    rate_type_name VARCHAR(255),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE rates(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    rate_type_id INT NOT NULL,
    rate_name VARCHAR(255),
    FOREIGN KEY rate_key100(rate_type_id) REFERENCES rate_types(id),
    amount DECIMAL(20,2),
    isweekday TINYINT(4),
    isspecial TINYINT(4),
    start_date DATETIME,
    end_date DATETIME,
    isactive TINYINT(4),
    extra_adult DECIMAL(20,2),
    extra_child DECIMAL(20,2),
    created DATETIME,
    modified DATETIME

);

CREATE TABLE amenity_types(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    amenity_type_name  VARCHAR(255),
    created DATETIME,
    modified DATETIME
);





CREATE TABLE amenities(
    id INT AUTO_INCREMENT PRIMARY KEY,
    amenity_type_id INT,
    amenity_name VARCHAR(255),
    amenity_logo VARCHAR(255),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE tax_setting_types(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    tax_setting_name VARCHAR(255),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE tax_settings(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    tax_setting_type_id  INT NOT NULL,
    FOREIGN KEY  tax_settings_key100(tax_setting_type_id) REFERENCES tax_setting_types(id),
    amount DECIMAL(20,2),
    created DATETIME,
    modified DATETIME

);

CREATE TABLE wings(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    wing_name VARCHAR(255),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE floors(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    wing_id INT NOT NULL,
    floor_name VARCHAR(255),
    alias VARCHAR(255),
    sort_key INT,
    description TEXT,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY  wings_key2000(wing_id) REFERENCES wings(id)
);



CREATE TABLE room_types(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    room_type_name VARCHAR(255),
    alias  VARCHAR(255),
    sort_key  INT,
    description TEXT,
    max_adult  INT,
    max_child  INT,
    back_color  VARCHAR(200),
    inactive  TINYINT(4),
    created DATETIME,
    modified DATETIME

);

CREATE TABLE room_types_rates(
    room_type_id INT NOT NULL,
    rate_id INT NOT NULL,
    PRIMARY KEY(room_type_id,rate_id),
    FOREIGN KEY room_types_key5600(room_type_id) REFERENCES room_types(id),
    FOREIGN KEY rate_key5600(rate_id) REFERENCES rates(id)
);

CREATE TABLE room_owners(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    first_name  VARCHAR(255),
    last_name VARCHAR(255),
    description TEXT,
    room_plan VARCHAR(255),
    amount  DECIMAL(20,2),
    address  VARCHAR(450),
    city VARCHAR(255),
    state VARCHAR(250),
    country VARCHAR(250),
    phone VARCHAR(255),
    fax VARCHAR(255),
    email VARCHAR(255),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE rooms(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    room_type_id INT NOT NULL,
    floor_id INT NOT NULL,
    alias VARCHAR(255),
    sort_key INT,
    room_name VARCHAR(255),
    room_owner_id  INT,
    phone_extension VARCHAR(255),
    data_extension VARCHAR(255),
    keycard_alias  VARCHAR(255),
    power_code VARCHAR(255),
    FOREIGN KEY  room_type_key400(room_type_id) REFERENCES room_types(id),
    FOREIGN KEY  floor_key59000(floor_id) REFERENCES floors(id),
    FOREIGN KEY  room_owners_key500(room_owner_id) REFERENCES room_owners(id),
    remark TEXT,
    inactive TINYINT(4),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE room_images(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    room_id INT NOT NULL,
    FOREIGN KEY  room_key500(room_id) REFERENCES rooms(id),
    image_url VARCHAR(255),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE rooms_amenities(
    room_id INT NOT NULL,
    amenity_id INT NOT NULL,
    PRIMARY KEY (room_id,amenity_id),
    FOREIGN KEY  room_key600(room_id) REFERENCES rooms(id),
    FOREIGN KEY  amenities_key600(amenity_id) REFERENCES amenities(id)
);


CREATE TABLE rooms_week_days(
    room_id INT NOT NULL,
    week_day_id INT NOT NULL,
    PRIMARY KEY (room_id,week_day_id),
    FOREIGN KEY  room2_key600(room_id) REFERENCES rooms(id),
    FOREIGN KEY  week_days_key6400(week_day_id) REFERENCES week_days(id)
);


CREATE TABLE season_types(
    id INT AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    season_type_name VARCHAR(255),
    deacription TEXT,
    created DATETIME,
    modified DATETIME
);

CREATE TABLE seasons(
    id INT AUTO_INCREMENT PRIMARY KEY,
    season_type_id INT NOT NULL,
    alias VARCHAR(255),
    season_name VARCHAR(255),
    deacription TEXT,
    from_day INT,
    to_day INT,
    from_month  VARCHAR(255),
    to_month  VARCHAR(255),
    start_date DATETIME,
    end_date  DATETIME,
    FOREIGN KEY season_types_key450(season_type_id) REFERENCES season_types(id),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE non_rental_units(
    id INT AUTO_INCREMENT  PRIMARY KEY,
    alias VARCHAR(255),
    name VARCHAR(255),
    description TEXT,
    amount DECIMAL(20,2),
    min_deposit DECIMAL(20,2),
    created DATETIME,
    modified DATETIME
);



CREATE TABLE dashboard(
    id INT AUTO_INCREMENT  PRIMARY KEY
);


CREATE TABLE propertysetup(
    id INT AUTO_INCREMENT  PRIMARY KEY
);

CREATE TABLE mainconfig(
    id INT AUTO_INCREMENT  PRIMARY KEY
);

CREATE TABLE mastersetup(
    id INT AUTO_INCREMENT  PRIMARY KEY
);

CREATE TABLE miscellaneous(
    id INT AUTO_INCREMENT  PRIMARY KEY
);


CREATE TABLE advancesetting(
    id INT AUTO_INCREMENT  PRIMARY KEY
);




CREATE TABLE taxes(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    tax_name VARCHAR(255),
    duration INT,
    charge_on_extra_adult  TINYINT(4),
    charge_on_extra_child TINYINT(4),
    start_day DATETIME,
    format VARCHAR(255),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE exchange_rates(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    country_name VARCHAR(255),
    active TINYINT(4),
    decimal_place INT,
    currency_name VARCHAR(255),
    currency_symbol VARCHAR(255),
    symbol_placement VARCHAR(255),
    exchange_rate  DECIMAL(20,2),
    created DATETIME,
    modified DATETIME
);





CREATE TABLE settlement_types(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    settlement_name VARCHAR(255),
    can_generate_receipt TINYINT(4),
    prefix VARCHAR(255),
    suffix VARCHAR(255),
    start_index  BIGINT(20),
    current_index BIGINT(20),
    alias  VARCHAR(255),
    active TINYINT(4),
    payment_option  VARCHAR(255),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE settlements(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    settlement_type_id INT NOT NULL,
    settlement_name VARCHAR(255),
    prefix VARCHAR(255),
    suffix VARCHAR(255),
    card_holder_name  VARCHAR(255),
    card_name VARCHAR(255),
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY settlement_type_id_object_3400(settlement_type_id) REFERENCES  settlement_types(id)
);






CREATE TABLE account_types(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    account_type_name VARCHAR(255),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE hotel_representatives(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    hotel_representative_name  VARCHAR(255),
    created DATETIME,
    modified DATETIME
);




CREATE TABLE accounts(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    account_type_id INT NOT NULL,
    hotel_representative_id INT ,
    alias VARCHAR(255),
    last_name VARCHAR(255) NOT NULL,
    first_name VARCHAR(255)  NOT NULL,
    account_number VARCHAR(255)  NOT NULL,
    credit_limit DECIMAL(20,2),
    opening_balance DECIMAL(20,2),
    payment_term  DECIMAL(20,2),
    address1 VARCHAR(255),
    address2   VARCHAR(255),
    city  VARCHAR(255),
    postal_code VARCHAR(255),
    state   VARCHAR(255),
    country VARCHAR(255),
    phone VARCHAR(255),
    fax VARCHAR(255),
    email VARCHAR(255),
    credit_card_type  VARCHAR(255),
    card_holder  VARCHAR(255),
    card_number VARCHAR(255),
    exp_date DATETIME,
    reg_number VARCHAR(255),
    reg_number1 VARCHAR(255),
    reg_number2  VARCHAR(255),
    created_on DATETIME,
    created_by VARCHAR(255),
    remark   TEXT,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY  account_type_key_2000(account_type_id) REFERENCES account_types(id),
    FOREIGN KEY hotel_representative_key_200(hotel_representative_id)  REFERENCES hotel_representatives(id)
);



CREATE TABLE business_source_types(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    business_source_type_name VARCHAR(255),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE business_sources(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    business_source_types_id INT NOT NULL,
    alias VARCHAR(255),
    business_source_name VARCHAR(255),
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY business_source_types_key_200(business_source_types_id) REFERENCES  business_source_types(id)
);



CREATE TABLE extra_charge_categories(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    category_name VARCHAR(255),
    description TEXT,
    created DATETIME,
    modified DATETIME
);


CREATE TABLE extra_charges(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    extra_charge_name VARCHAR(255),
    description TEXT,
    extra_charge_category_id INT NOT NULL,
    rate   DECIMAL(20,2),
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY extra_charge_categories_key_200(extra_charge_category_id) REFERENCES  extra_charge_categories(id)
);


CREATE TABLE meal_plans(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    meal_plan_name VARCHAR(255),
    description TEXT,
    created DATETIME,
    modified DATETIME
);



CREATE TABLE revenue_breakdowns(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    sort_key INT,
    breakdown_name  VARCHAR(255),
    description  TEXT,
    created DATETIME,
    modified DATETIME
);



CREATE TABLE remark_categories(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    sort_key INT,
    category_name  VARCHAR(255),
    created DATETIME,
    modified DATETIME
);



CREATE TABLE remarks(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    remark_category_id INT NOT NULL,
    alias VARCHAR(255),
    sort_key INT,
    reason  TEXT,
    active TINYINT(4),
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY remark_categories_key_200(remark_category_id)  REFERENCES remark_categories(id)
);



CREATE TABLE card_type_prefixes(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    prefix  VARCHAR(255),
    credit_card_type  VARCHAR(255),
    settlement_type_id INT,
    created DATETIME,
    modified DATETIME,
    FOREIGN KEY settlement_types_key_200(settlement_type_id)  REFERENCES settlement_types(id)
);


CREATE TABLE identities(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    sort_key INT,
    identity_name   VARCHAR(255),
    description  TEXT,
    created DATETIME,
    modified DATETIME
);


CREATE TABLE room_status_colors(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    status_type  VARCHAR(255),
    status_name  VARCHAR(255),
    color_name   VARCHAR(255),
    created DATETIME,
    modified DATETIME
);



CREATE TABLE dnr_lists(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    dnr_name   VARCHAR(255),
    description  TEXT,
    created DATETIME,
    modified DATETIME
);


CREATE TABLE follow_up_types(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    type_name VARCHAR(255),
    color   VARCHAR(255),
    created DATETIME,
    modified DATETIME
);



CREATE TABLE email_accounts(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    sender_name VARCHAR(255),
    email_address   VARCHAR(255),
    mail_server   VARCHAR(255),
    mail_server_port   VARCHAR(255),
    user_name   VARCHAR(255),
    password   VARCHAR(255),
    login_using_ssl TINYINT(4),
    use_proxysettings  TINYINT(4),
    created DATETIME,
    modified DATETIME
);


CREATE TABLE templates(
    id INT  AUTO_INCREMENT PRIMARY KEY,
    alias VARCHAR(255),
    template_code  VARCHAR(255),
    template_title   VARCHAR(255),
    template_body TEXT, 
    default_template_body TEXT,  
    created DATETIME,
    modified DATETIME
);

CREATE TABLE notices(
   id INT  AUTO_INCREMENT PRIMARY KEY,
   notice_title VARCHAR(255),
   notice_body  TEXT,
   created DATETIME,
   modified DATETIME
);


CREATE TABLE invoice_settings(
   id INT  AUTO_INCREMENT PRIMARY KEY,
   invoice_variable_name VARCHAR(255),
   number_type  VARCHAR(255),
   prefix VARCHAR(255),
   start_from INT,
   created DATETIME,
   modified DATETIME
);










