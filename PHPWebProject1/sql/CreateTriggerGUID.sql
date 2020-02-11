DELIMITER #
CREATE TRIGGER insert_guid 
BEFORE INSERT ON guid_tool
FOR EACH  ROW 
BEGIN 
    SET NEW.guid_key = UUID(); 
END;
#
DELIMITER ;