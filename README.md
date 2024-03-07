# practical-test

Please refer to email.

there is a db file practical-test.sql uploaded here

#####################################################################################################

C:\xampp\htdocs\practical-test>php artisan migrate

   INFO  Preparing database.

  Creating migration table .............................................................................................................. 418ms DONE

   INFO  Running migrations.

  2014_10_12_000000_create_users_table .................................................................................................. 157ms DONE
  2014_10_12_100000_create_password_resets_table ........................................................................................ 191ms DONE
  2016_06_01_000001_create_oauth_auth_codes_table ....................................................................................... 154ms DONE
  2016_06_01_000002_create_oauth_access_tokens_table .................................................................................... 286ms DONE
  2016_06_01_000003_create_oauth_refresh_tokens_table ................................................................................... 169ms DONE
  2016_06_01_000004_create_oauth_clients_table ........................................................................................... 97ms DONE
  2016_06_01_000005_create_oauth_personal_access_clients_table ........................................................................... 46ms DONE
  2019_08_19_000000_create_failed_jobs_table ............................................................................................. 80ms DONE
  2019_12_14_000001_create_personal_access_tokens_table ................................................................................. 141ms DONE

C:\xampp\htdocs\practical-test>php artisan passport:install
Encryption keys generated successfully.
Personal access client created successfully.
Client ID: 1
Client secret: Sm0qzOicgBwLWcIRxqFSMwyCpsCiYmsegVykfovs
Password grant client created successfully.
Client ID: 2
Client secret: uY37hxX46n3c6pga11xMFN7nWJfP7GOcglBaiGjA

C:\xampp\htdocs\practical-test>php artisan make:model Employee -m

   INFO  Model [C:\xampp\htdocs\practical-test\app/Models/Employee.php] created successfully.

   INFO  Migration [C:\xampp\htdocs\practical-test\database\migrations/2024_03_06_124029_create_employees_table.php] created successfully.


C:\xampp\htdocs\practical-test>php artisan migrate

   INFO  Running migrations.

  2024_03_06_124029_create_employees_table ............................................................................................... 52ms DONE

C:\xampp\htdocs\practical-test>php artisan make:controller Auth/UserAuthController

   INFO  Controller [C:\xampp\htdocs\practical-test\app/Http/Controllers/Auth/UserAuthController.php] created successfully.

C:\xampp\htdocs\practical-test>php artisan tinker
Psy Shell v0.12.0 (PHP 8.2.4 — cli) by Justin Hileman
> App\Models\Employee::factory()->create();
= App\Models\Employee {#5987
    name: "Susana Waelchi",
    email: "bernier.georgette@example.com",
    phone: "1-629-587-7573",
    last_operation: "A",
    department: "WEB",
    password: "$2y$10$wlzcFMxeHzWFvbqhPqKHbemj/cd3bYienMjTLArZ/0dIV1ftdOGme",
    updated_at: "2024-03-07 00:50:00",
    created_at: "2024-03-07 00:50:00",
    id: 1,
  }

> App\Models\Employee::factory()->create();
= App\Models\Employee {#5989
    name: "Tito Orn",
    email: "bkirlin@example.net",
    phone: "820-468-1159",
    last_operation: "A",
    department: "WEB",
    password: "$2y$10$Dp1dbjE1p44y9oMfi9iIgOge9CwkV71h9lVpDNK2eyXjnODfPwO.m",
    updated_at: "2024-03-07 00:50:07",
    created_at: "2024-03-07 00:50:07",
    id: 2,
  }

> App\Models\Employee::factory()->create();
= App\Models\Employee {#5986
    name: "Kathryn Bergstrom",
    email: "jenkins.cameron@example.org",
    phone: "1-952-712-3062",
    last_operation: "A",
    department: "WEB",
    password: "$2y$10$dBTmLKVQrXjmCsewv.lBy.nIkPvZABn32ULusa78J.z1kHwFcnJne",
    updated_at: "2024-03-07 00:50:09",
    created_at: "2024-03-07 00:50:09",
    id: 3,
  }

> App\Models\Employee::factory()->create();
= App\Models\Employee {#5995
    name: "Earline Hand",
    email: "murphy.desmond@example.com",
    phone: "+1-458-289-0088",
    last_operation: "A",
    department: "WEB",
    password: "$2y$10$0dIlTAqvimLuv0mlwpk.2.Cx./9GvsKxunU4jDYbN3qa2g1/4xeAa",
    updated_at: "2024-03-07 00:50:10",
    created_at: "2024-03-07 00:50:10",
    id: 4,
  }

> App\Models\Employee::factory()->create();
= App\Models\Employee {#5983
    name: "Pinkie Klocko",
    email: "scot93@example.org",
    phone: "+1-909-896-4617",
    last_operation: "A",
    department: "WEB",
    password: "$2y$10$NIG1xqy13vjvkYhAUOLYoeDnfMQ6P81DYkg0PKAhgEjGT6cMpG7X.",
    updated_at: "2024-03-07 00:50:11",
    created_at: "2024-03-07 00:50:11",
    id: 5,
  }

############################################################################

 
