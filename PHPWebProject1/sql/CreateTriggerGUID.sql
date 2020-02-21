DELIMITER #
CREATE TRIGGER insert_guid 
BEFORE INSERT ON guid_tool
FOR EACH  ROW 
BEGIN 
    SET NEW.guid_key = UUID(); 
END;
#
DELIMITER ;



DELIMITER $$
CREATE TRIGGER activities_type_insert_guid 
BEFORE INSERT ON activities_type
FOR EACH  ROW 
BEGIN 
    SET NEW.Id = UUID(); 
END;
$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER activities_insert_guid 
BEFORE INSERT ON activities
FOR EACH  ROW 
BEGIN 
    SET NEW.Id = UUID(); 
END;
$$
DELIMITER ;