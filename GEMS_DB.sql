########################################
#                                      #
# Global Entertainment Management Sys. #
#                                      #
########################################
# Group Member Names:                  #
#        Nate Kimpler       - Z1813114 #
#        Micahel Barth      - Z1780089 #
########################################

DROP TABLE ASS_USER_EVENT;
DROP TABLE GEM_USER;
DROP TABLE EVENT_VENDOR;
DROP TABLE VENDOR;
DROP TABLE EVENT;
DROP TABLE BAND_MEMBER;
DROP TABLE BAND;
DROP TABLE ARTIST;
DROP TABLE AGENT;

#AGENT################################################################################
CREATE TABLE AGENT
(
  agentID   INTEGER AUTO_INCREMENT PRIMARY KEY,
  fName     CHAR(20),
  midInit   CHAR(1),
  lName     CHAR(20),
  street    CHAR(30),
  city      CHAR(20),
  state     CHAR(2),
  zip       CHAR(5),
  email     CHAR(20),
  officeNum CHAR(11),                  # must be in 1 (xxx)-xxx-xxxx format
  cellNum   CHAR(11),                  # must be in 1 (xxx)-xxx-xxxx format
  agentType CHAR(10)                   # for band, for artist, other
);

INSERT INTO AGENT (fName, midInit, lName, street, city, state, zip, email, officeNum, cellNum, agentType) VALUES ('Jill','F','Spill','645 S. Barneth Drive','Salsbury','NC','48004','JillF@AgencyOak.com','18345579008','18345349876','For Artist');
INSERT INTO AGENT (fName, midInit, lName, street, city, state, zip, email, officeNum, cellNum, agentType) VALUES ('James','A','Zezsuba','1003 N. Nerfentel Drive','Subar','SC','98004','Jaz@Bilter.com','15434679418','15435349970','For Artist');
INSERT INTO AGENT (fName, midInit, lName, street, city, state, zip, email, officeNum, cellNum, agentType) VALUES ('Imke','D','Smith','45  East Barneth St.','Barktle','AZ','48004','ImkeD@business.com','18345679108','18145349876','For Artist');
INSERT INTO AGENT (fName, midInit, lName, street, city, state, zip, email, officeNum, cellNum, agentType) VALUES ('Mike','C','Angloonis','234 Bilpart Street','Dubbo','OH','60103','MCAng@Agmail.com','18345679008','18349849876','For Artist');
INSERT INTO AGENT (fName, midInit, lName, street, city, state, zip, email, officeNum, cellNum, agentType) VALUES ('Spencer','P','Nirtltak','1023 Filth Drive','Charleston','IA','41111','SylvFF@Skiper.com','18345679108','18345349876','For Band');
INSERT INTO AGENT (fName, midInit, lName, street, city, state, zip, email, officeNum, cellNum, agentType) VALUES ('Sylvester','E','Filkstar','Stancy Barn Road','Grubbery','DE','42222','Sylver@AgenctBus.com','18345179008','18345349879','For Band');
INSERT INTO AGENT (fName, midInit, lName, street, city, state, zip, email, officeNum, cellNum, agentType) VALUES ('Darnassus','Z','Iblter','1892 Effingham Court','RiffRaff','WY','41234','DangDarnF@gmail.com','18345619008','18345349873','For Band');
INSERT INTO AGENT (fName, midInit, lName, street, city, state, zip, email, officeNum, cellNum, agentType) VALUES ('Spike','H','Narphlootun','456 Driveway Drive','Swingaltoot','NC','89000','SparclooF@gmail.com','18345179008','18345343370','For Other');
INSERT INTO AGENT (fName, midInit, lName, street, city, state, zip, email, officeNum, cellNum, agentType) VALUES ('Lyn','E','Rendel','2378 Near Port Blvd.','Derfnar','IL','69114','LynLe@AOak.com','18345679008','18345349854','For Other');
INSERT INTO AGENT (fName, midInit, lName, street, city, state, zip, email, officeNum, cellNum, agentType) VALUES ('Rolf','L','Spark','15 Light Glenn Apt. 12','Farkus','WY','48114','FarmerRolf@gmail.com','18345679008','18345347676','For Other');
######################################################################################

#ARTIST###############################################################################
CREATE TABLE ARTIST
(
  artistID  INTEGER AUTO_INCREMENT PRIMARY KEY,
  agentID   INTEGER,
  fName     CHAR(20),
  midInit   CHAR(1),                   #fix
  lName     CHAR(20),
  gender    CHAR(1), 
  street    CHAR(30),
  city      CHAR(20),
  state     CHAR(2),
  zip       CHAR(5),
  email     CHAR(20),
  cellNum   CHAR(11),                   # must be in 1 (xxx)-xxx-xxxx format
  eventRate DECIMAL(6,2),               # $xxxx.xx
  FOREIGN KEY (agentID) REFERENCES AGENT(agentID)
 );
######################################################################################

#BAND#################################################################################
CREATE TABLE BAND
(
  bandID    INTEGER AUTO_INCREMENT PRIMARY KEY,
  bandName  CHAR(20),
  eventRate DECIMAL(6,2),              # $xxxx.xx                                                    
  specNotes CHAR(100)
); 
######################################################################################

#BAND_MEMBER##########################################################################
CREATE TABLE BAND_MEMBER
(
  bandMemberID   INTEGER AUTO_INCREMENT PRIMARY KEY,
  bandID         INTEGER,
  agentID        INTEGER,
  fName          CHAR(20),
  lName          CHAR(20),
  cellNum        CHAR(11),           # must be in 1 (xxx)-xxx-xxxx format
  title          CHAR(10),           # leader, member, agent
  FOREIGN KEY (bandID) REFERENCES BAND(bandID),
  FOREIGN KEY (agentID) REFERENCES AGENT(agentID) 
);
######################################################################################

#EVENT################################################################################
CREATE TABLE EVENT 
(
  eventID   INTEGER AUTO_INCREMENT PRIMARY KEY,
  artistID  INTEGER,                  # If event has artist, bandID is null
  bandID    INTEGER,                  # If event has band, artistID is null
  street    CHAR(30),
  city      CHAR(20),
  state     CHAR(2),
  zip       CHAR(5),
  tickCost  DECIMAL(5,2),             # $xx.xx or $xxx.xx
  eventDate CHAR(10),                 # xx/xx/xxxx
  startTime CHAR(10),
  seatCap   CHAR(5),
  specNotes CHAR(100),
  status    CHAR(20) DEFAULT 'CREATED',   # CREATED, APPROVED, ADVERTISED, SOLDOUT, CANCELLED
  FOREIGN KEY (bandID) REFERENCES BAND(bandID),
  FOREIGN KEY (artistID) REFERENCES ARTIST(artistID)
);
######################################################################################

#VENDOR###############################################################################
CREATE TABLE VENDOR                                                                  
(                                                                                    
  vendorID   INTEGER AUTO_INCREMENT PRIMARY KEY,                                    
  busName    CHAR(20),
  repFname   CHAR(20),
  repLname   CHAR(20),
  phoneNum   CHAR(11),
  email      CHAR(20),
  vendType   CHAR(20),               # Concert Hall, Equipment, Setup, lighting, Sound, Other,
  street     CHAR(30),               # Cleanup, Security, Foods, Operating Advertisement
  city       CHAR(20),                
  state      CHAR(2),
  zip        CHAR(5)                                                             
);                                                                                   
######################################################################################

#EVENT_VENDOR#########################################################################
CREATE TABLE EVENT_VENDOR                                                            
(                                                                                    
  vendorID   INTEGER,
  eventID    INTEGER,                                 
  PRIMARY KEY (vendorID, eventID),                                                                 #     
  FOREIGN KEY (vendorID) REFERENCES VENDOR(vendorID),                                                                           #
  FOREIGN KEY (eventID) REFERENCES EVENT(eventID)                                                               
);                                                                                   
######################################################################################

#GEM_USER#############################################################################
CREATE TABLE GEM_USER                                                                
(                                                                                    
  gemUserID  INTEGER PRIMARY KEY,
  fName      CHAR(20),
  lName      CHAR(20),
  password   CHAR(20),
  title      CHAR(20),              # Staff, Manager, COO
  loginDate  CHAR(20),              # PHP datetime fnc populates this
  logoutDate CHAR(20),              # PHP datetime fnc populates this
  loginAtmps INTEGER DEFAULT '0'    # USE FOR FAILED CHECK, RESET ON SUCCESFUL LOGIN
);                                                                                   
######################################################################################

#ASS_USER_EVENT#######################################################################
CREATE TABLE ASS_USER_EVENT                                                          
(                                                                                    
  gemUserID  INTEGER,
  eventID    INTEGER,
  PRIMARY KEY (gemUserID, eventID),                                                                 #     
  FOREIGN KEY (gemUserID) REFERENCES GEM_USER(gemUserID),                                                                           #
  FOREIGN KEY (eventID) REFERENCES EVENT(eventID)                                                                                                     
);                                                                                   
######################################################################################