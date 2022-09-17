Employee

| Attribute  | Data Type   | Constraint | Description                  | Example          |
| ---------- | ----------- | ---------- | ---------------------------- | ---------------- |
| EmployeeID | INT         | PK         | Employee Identification code | 164332           |
| name       | VARCHAR(20) |            | Employee Name                | Alexander Drew   |
| address    | VARCHAR(30) |            | Employee Address             | 14 Street Avenue |
| DOB        | DATE        |            | Employee Date of Birth       | 1992-07-20       |
| Salary     | INT         |            | Salary of the Employee       | 69000            |

Race

| Attribute | Data Type    | Constraint | Description                  | Example             |
| --------- | ------------ | ---------- | ---------------------------- | ------------------- |
| RaceID    | INT          | PK         | Identififacion code for Race | 103020              |
| RaceName  | VARCHAR (20) |            | Name of race                 | 5k Fun Run          |
| type      | VARCHAR (20) |            | type of race                 | Marathon            |
| Location  | VARCHAR (20) |            | Whjere the race starts       | Hobart City Hall    |
| DateTime  | DATETIME     |            | Time race starts             | 2022-07-05 12:00:00 |

Participant 

| Attribute | Data Type   | Constraint | Description                  | Example        |
| --------- | ----------- | ---------- | ---------------------------- | -------------- |
| UniqueID  | INT         | PK         | Participant's      ID        | 500203         |
| partName  | VARCHAR(20) |            | Participant's        Name    | Alexander Drew |
| partDOB   | DATE        |            | Participant's Date of birth  | 1992-07-20     |
| gender    | CHAR(1)     |            | Participant's         Gender | M              |

