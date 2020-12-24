
	delimiter $$

	create function fn_getFullName(pa_username varchar(45)) 
	returns varchar(120) deterministic

	begin

  	  declare fullname varchar(120) default "User does not exist";

          select concat(first_name, " ",last_name) into fullname 
               from students where username=pa_username;
 
          return fullname;

	end$$


	delimiter ;







