-- TEAM MAKESMART FINAL
-- CST336 Plant Database
-- TEAM MEMBERS Jake McGhee, Pavlos Papadonikolakis, Maco Doussias 
-- 07-27-18

-- ----------------------------------------------------------------INSERT SQL STATEMENTS


-- Create the administrator account
INSERT INTO `admin` VALUES (1, 'admin', SHA1('secret'));

-- Create a user account
INSERT INTO `customer` VALUES (1,'Seymour','Krelborn',SHA1('secret'),'sk@apple.com');

-- Create a few plants
INSERT INTO `plant` VALUES (1,'Venus Fly trap','This plant is deadly plant that traps, kills and eats insects.', 12,99, 'img/venus.pnp');
INSERT INTO `plant` VALUES (2,'Poison Oak','This plant can cause serious issues in the woods.  Best to handle with care.', 20,50, 'img/poisonoak.pnp');
INSERT INTO `plant` VALUES (3,'Nightshade','Only some are harmful if ingested, nightshades can be poisonous or edible.', 7,25, 'img/poinsonoak.pnp');

-- Create a few purchases

-- Purchase one for customer one
INSERT INTO `purchase` VALUES (1,current_timestamp(),1);
  INSERT INTO `lineItem` VALUES (1,1,5,10,0);
  INSERT INTO `lineItem` VALUES (1,2,3,10,0);

-- First purchase for customer 2
INSERT INTO `purchase` VALUES (2,current_timestamp(),1);
  INSERT INTO `lineItem` VALUES (2,3,5,20,0);

-- First purchase for customer 3
INSERT INTO `purchase` VALUES (3,current_timestamp(),1);
  INSERT INTO `lineItem` VALUES (3,3,8,16,55);