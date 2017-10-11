CREATE TABLE ChiefComplain(
	`ChiefComplainId` int(11) primary key auto_increment ,
	`ChiefComplainName` varchar(200) not null,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now()
)ENGINE=InnoDB;

CREATE TABLE Clinic(
	`ClinicId` int(11) PRIMARY KEY auto_increment,
	`ClinicName` varchar(200) NULL,
	`ClinicAddress` varchar(255) NULL,
	`ClinicContactNumber` varchar(150) NULL,
	`ClinicEmailAddress` varchar(150) NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now()
    ) ENGINE=InnoDB;
 

CREATE TABLE ClinicType(
	`ClinicTypeId` int(11) primary key AUTO_INCREMENT,
	`ClinicType` varchar(255) NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now()
    ) ENGINE=InnoDB;

CREATE TABLE ClinicClinicType(
	`ClinicId` int(11) not null,
	`ClinicTypeId` int(11) not null,
	`EntryBy` int(11) not null,
	`EntryDate` datetime(3) not null,
	`EditedBy` int NULL,
	`EditedDate` datetime(3) NULL,
     FOREIGN KEY fk_clinic_id(ClinicId) REFERENCES Clinic(ClinicId) ON DELETE cascade,
     FOREIGN KEY fk_clinictype_id(ClinicTypeId) REFERENCES ClinicType(ClinicTypeId) ON DELETE cascade
    ) ENGINE=InnoDB;    
    


CREATE TABLE Doctor(
	`DoctorId` int(11) primary key AUTO_INCREMENT,
	`DoctorName` varchar(150) not null,
	`DoctorAddress` varchar(250) NULL,
	`DoctorContactNo` varchar(20) NULL,
	`DoctorEmailAddress` varchar(100) NULL,
	`EntryBy` int(11)  NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime  default now()
 )ENGINE=InnoDB;


CREATE TABLE DoctorClinic(
	`DoctorId` int(11) NOT NULL,
	`ClinicId` int(11) NOT NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime default now(),
    FOREIGN KEY fk_doctor_id(DoctorId) REFERENCES Doctor(DoctorId) ON DELETE cascade,
	FOREIGN KEY fk_clinic_id(ClinicId) REFERENCES Clinic(ClinicId) ON DELETE cascade
    ) ENGINE=InnoDB; 


CREATE TABLE DoctorClinic(
	`DoctorId` int(11) NOT NULL,
	`ClinicId` int(11) NOT NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime(3) NULL,
	`EditedBy` int NULL,
	`EditedDate` datetime(3) NULL,
    FOREIGN KEY fk_doctor_id(DoctorId)
	REFERENCES Doctor(DoctorId) 
	ON DELETE cascade,
	FOREIGN KEY fk_clinicId_id(ClinicId) 
    REFERENCES Clinic(ClinicId) 
	ON DELETE cascade
)ENGINE=InnoDB;

CREATE TABLE Education(
	`EducationId` int(11) primary key AUTO_INCREMENT,
	`EducationName` varchar(250) NULL,
	`EducationShortName` varchar(20) NULL,
	`EducationWeight` numeric(18, 0) NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now()
)ENGINE=InnoDB;

CREATE TABLE EducationInstitute(
	`EducationInstituteId` int(11) primary key AUTO_INCREMENT,
	`EducationInstituteName` varchar(250) NULL,
	`EducationInstituteAddress` Text NULL,
	`EducationInstituteContactNo` varchar(100) NULL,
	`EducationInstituteEmail` varchar(100) NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now()
    ) ENGINE=InnoDB;

CREATE TABLE EducationGrade(
	`EducationGradeId` int(11) primary key AUTO_INCREMENT,
	`EducationMaxGrade` varchar(100) NULL,
        `EducationMinGrade` varchar(100) NULL,
	`EducationShortName` varchar(100) NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now()
)ENGINE=InnoDB;

CREATE TABLE DoctorEducation(
	`DoctorId` int(11) Not Null,
	`EducationId` int(11) Not Null,
	`EducationGradeId` int(11) Not Null,
	`EducationInstituteId` int(11) Not Null,
	`PassingYear` varchar(10) NULL,
	`Campus` varchar(250) NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now(),
    FOREIGN KEY fk_doctor_id(DoctorId)
	REFERENCES Doctor(DoctorId) 
	ON DELETE cascade,
    FOREIGN KEY fk_education_id(EducationId)
	REFERENCES Education(EducationId) 
	ON DELETE cascade,
    FOREIGN KEY fk_educationGrade_id(EducationGradeId)
	REFERENCES EducationGrade(EducationGradeId) 
	ON DELETE cascade,
    FOREIGN KEY fk_educationInstitute_id(EducationInstituteId)
	REFERENCES EducationInstitute(EducationInstituteId) 
	ON DELETE cascade
 )ENGINE=InnoDB;


CREATE TABLE DrugCategory(
	`DrugCategoryId` int(11) primary key AUTO_INCREMENT,
	`DrugCategoryName` varchar(100) unique NOT NULL,
	`DrugCategoryIsActive` int(3) NOT NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime  default now()
)ENGINE=InnoDB;

CREATE TABLE DrugSubCategory(
	`DrugSubcategoryId` int(11) primary key AUTO_INCREMENT,
	`DrugSubcategoryName` varchar(255) unique NOT NULL,
	`DrugCategoryId` int(11) NOT NULL,
	`DrugSubcategoryIsActive` int(3) NOT NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now(),
    FOREIGN KEY fk_drugcategory_id(DrugCategoryId)
	REFERENCES DrugCategory(DrugCategoryId) 
	ON DELETE cascade
)ENGINE=InnoDB;



CREATE TABLE Drug(
	`DrugId` int(11) primary key auto_increment,
	`DrugName` varchar(250) unique NOT NULL,
	`DrugSubcategoryId` int(11) NOT NULL,
	`DrugIsActive` int(3) NOT NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now(),
     FOREIGN KEY fk_drugSubcategory_id(DrugSubcategoryId)
	 REFERENCES DrugSubCategory(DrugSubcategoryId) 
	 ON DELETE cascade
)ENGINE=InnoDB;


CREATE TABLE DrugStrengthUnit(
	`DrugStrengthUnitId` int(11) primary key auto_increment,
	`DrugStrengthUnitName` varchar(100) NOT NULL,
	`DrugStrengthUnitCode` varchar(10) NOT NULL,
	`DrugStrengthUnitIsActive` int(3) NOT NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now()
 )ENGINE=InnoDB;
 
  
CREATE TABLE DrugForm(
	`DrugFormId` int(11) primary key auto_increment,
	`DrugFormName` varchar(250) NOT NULL,
	`DrugFormIsActive` int NOT NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now()
 )ENGINE=InnoDB;
 
 
 CREATE TABLE DrugType(
	`DrugTypeId` int(11) primary key auto_increment,
	`DrugTypeName` varchar(100) unique NOT NULL,
	`DrugTypeIsActive` int NOT NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now()
    )ENGINE=InnoDB;
 
 
 CREATE TABLE Manufacturer(
	`ManufacturerId` int(11) primary key auto_increment,
	`ManufacturerName` varchar(250) NOT NULL,
	`ManufacturerPhone` varchar(20) NOT NULL,
	`ManufacturerEmail` varchar(100) NOT NULL,
	`ManufacturerWebsite` varchar(250) NOT NULL,
	`ManufacturerAddress` varchar(100) NOT NULL,
	`ManufacturerIsActive` int(3) NOT NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate`datetime default now()
)ENGINE=InnoDB;

CREATE TABLE ManufacturerDrug(
	`ManufacturerDrugId` int(11) primary key auto_increment,
	`ManufacturerId` int(11) NOT NULL,
	`DrugTypeId` int(11) NOT NULL,
	`DrugFormId` int(11) NOT NULL,
	`DrugId` int(11) NOT NULL,
	`ManufacturerDrugName` varchar(250) NOT NULL,
	`DrugStrengthUnitID` int NOT NULL,
	`DrugStrengthUnit` numeric(18, 2) NULL,
	`EntryBy` int NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int NULL,
	`EditedDate` datetime default now(),
     FOREIGN KEY fk_manufacturer_id(ManufacturerId)
	 REFERENCES Manufacturer(ManufacturerId) 
	 ON DELETE cascade,
      FOREIGN KEY fk_drugType_id(DrugTypeId)
	 REFERENCES DrugType(DrugTypeId) 
	 ON DELETE cascade,
      FOREIGN KEY fk_drugForm_id(DrugFormId)
	 REFERENCES DrugForm(DrugFormId) 
	 ON DELETE cascade,
      FOREIGN KEY fk_drug_id(DrugId)
	 REFERENCES Drug(DrugId) 
	 ON DELETE cascade
)ENGINE=InnoDB;


CREATE TABLE IntervalPeriod(
	`IntervalPeriodId` int(11) primary key auto_increment,
	`IntervalPeriodName` varchar(50) NOT NULL,
	`IntervalPeriodIdentifier` varchar(50) NOT NULL,
	`EntryBy` int NULL,
	`EntryDate`  datetime default now(),
	`EditedBy` int NULL,
	`EditedDate`  datetime default now()
 )ENGINE=InnoDB;


CREATE TABLE DragAdvice(
	`DragAdviceId` int(11) primary key auto_increment,
	`DragAdviceName` varchar(250) NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime default now()
 )ENGINE=InnoDB;



CREATE TABLE WhenCondition(
	`WhenConditionId` int(11) primary key auto_increment,
	`WhenConditionName` varchar(250) NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime default now()
)ENGINE=InnoDB;

CREATE TABLE DrugApplicationMethod(
	`DrugApplicationMethodId` int(11) primary key auto_increment,
	`DrugApplicationMethodName` varchar(255) NOT NULL,
	`DrugApplicationMethodIsActive` int(3) NOT NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime default now()
)ENGINE=InnoDB;


CREATE TABLE PresDrugDetails(
	`PresDrugDetailsId` int(11) primary key auto_increment,
	`PresNumber` int(11) NOT NULL,
	`ManufacturerDrugId` int(11) NOT NULL,
	`WhenConditionId` int(11) NOT NULL,
	`DrugApplicationMethodId` int(11) NOT NULL,
	`DragAdviceId` int(11) NOT NULL,
	`UOM` varchar(40) NULL,
	`Intervel` int(11) NULL,
	`IntervalPattern` varchar(100) NULL,
	`IntervalPeriodId` int(11) NULL,
	`MedacationDuration` int(11) NULL,
	`Comment` Text NULL,
    FOREIGN KEY fk_manufacturerDrug_id(ManufacturerDrugId)
	 REFERENCES ManufacturerDrug(ManufacturerDrugId) 
	 ON DELETE cascade,
     FOREIGN KEY fk_whenConditionId_id(WhenConditionId)
	 REFERENCES whencondition(WhenConditionId) 
	 ON DELETE cascade,
     FOREIGN KEY fk_whenConditionId_id(WhenConditionId)
	 REFERENCES Whencondition(WhenConditionId) 
	 ON DELETE cascade,
     FOREIGN KEY fk_drugApplicationMethod_id(DrugApplicationMethodId)
	 REFERENCES DrugApplicationMethod(DrugApplicationMethodId) 
	 ON DELETE cascade,
     FOREIGN KEY fk_dragAdvice_id(DragAdviceId)
	 REFERENCES DragAdvice(DragAdviceId) 
	 ON DELETE cascade,
     FOREIGN KEY fk_intervalPeriod_id(IntervalPeriodId)
	 REFERENCES IntervalPeriod(IntervalPeriodId) 
	 ON DELETE cascade
 )ENGINE=InnoDB;



 
 CREATE TABLE Patient(
	`PatientId` int(11) primary key AUTO_INCREMENT,
	`PatientName` varchar(250) NULL,
	`PatientAddress` varchar(250) NULL,
	`PatientMobile` varchar(20) NULL,
	`PatientEmail` varchar(50) NULL,
	`PatientDBO` datetime default now(),
	`PatientAge` int(10) NULL,
	`PatientSex` Tinyint NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime default now()
 )ENGINE=InnoDB;
 
 
 CREATE TABLE PresInvestigation(
	`PresInvestigationId` int(11) primary key AUTO_INCREMENT,
	`PresInvestigationName` varchar(250) NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime  default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime default now()
  )ENGINE=InnoDB;
 
  
CREATE TABLE PresInvestigationDetails(
	`PresNumber` int(11) primary key AUTO_INCREMENT,
	`PresInvestigationId` int(11) NOT NULL,
	`Comment` varchar(300) NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime default now(),
	 FOREIGN KEY fk_presInvestigation_id(PresInvestigationId)
	 REFERENCES PresInvestigation(PresInvestigationId) 
	 ON DELETE cascade,
     FOREIGN KEY fk_presNumber_id(PresNumber)
	 REFERENCES PresMaster(PresNumber) 
	 ON DELETE cascade
)ENGINE=InnoDB;

CREATE TABLE PresExam(
	`PresExamId` int(11) primary key AUTO_INCREMENT,
	`PresExamName` varchar(250) NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime default now()
)ENGINE=InnoDB;


CREATE TABLE PresExamDetails(
	`PresNumber` int(11) primary key AUTO_INCREMENT,
	`PresExamId` int(11) NOT NULL,
	`PresExamValue` varchar(250) NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime default now(),
	 FOREIGN KEY fk_presExam_id(PresExamId)
	 REFERENCES PresExam(PresExamId) 
	 ON DELETE cascade,
     FOREIGN KEY fk_presNumber_id(PresNumber)
	 REFERENCES PresMaster(PresNumber) 
	 ON DELETE cascade
)ENGINE=InnoDB;


CREATE TABLE UserManager(
	`UserId` varchar(50) primary key unique NOT NULL,
	`Password` varchar(250) NULL,
	`UserName` varchar(250) NULL,
	`UserEmail` varchar(100) NULL,
	`UserPhone` varchar(100) NULL,
	`UserAddress` varchar(250) NULL,
	`IsAdmin` int(3) NULL,
	`DoctorId` int(11) UNIQUE NULL,
	`EntryBy` int(11) NULL,
	`EntryDate` datetime default now(),
	`EditedBy` int(11) NULL,
	`EditedDate` datetime default now(),
	 FOREIGN KEY fk_doctor_id(DoctorId)
	 REFERENCES Doctor(DoctorId) 
	 ON DELETE cascade
)ENGINE=InnoDB;

CREATE TABLE PresMaster(
	`PresNumber` int(11) primary key AUTO_INCREMENT,
	`DoctorId` int(11) NULL,
	`ClinickId` int(11) NULL,
	`PatientId` int(11) NULL,
	`PresDt` datetime default now(),
	`NextVisitDt` datetime default now(),
	`ChiefComplain` varchar(300) NULL,
	`Comment` varchar(300) NULL,
	`Advice` varchar(300) NULL,
	`CreatebyId` varchar(50) NULL,
	`EditbyId` int(11) NULL,
	`EditedDate` datetime default now(),
	 FOREIGN KEY fk_doctor_id(DoctorId)
	 REFERENCES Doctor(DoctorId) 
	 ON DELETE cascade,
     FOREIGN KEY fk_clinick_id(ClinickId)
	 REFERENCES Clinic(ClinicId) 
	 ON DELETE cascade,
     FOREIGN KEY fk_patient_id(PatientId)
	 REFERENCES Patient(PatientId) 
	 ON DELETE cascade,
     FOREIGN KEY fk_createby_id(CreatebyId)
	 REFERENCES UserManager(UserId) 
	 ON DELETE restrict
     )ENGINE=InnoDB;

CREATE TABLE FollowUp(
	`FollowUpId` int(11) primary key AUTO_INCREMENT,
    `PresNumber` int(11) not null,
     FOREIGN KEY fk_presNumber_id(PresNumber)
	 REFERENCES PresMaster(PresNumber) 
	 ON DELETE cascade
    )ENGINE=InnoDB;
    
