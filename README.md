# STEPS
1. Git Stuff
2. Create Database 
3. Make Authentication Scafolding
4. Add CrestApp  and Scafold Resources ( Clinic, Doctor, Secretary, Patient, )

# php artisan create:layout "New Dentist" --template-name=super

# php artisan resource-file:create Clinic --fields="id,name,description,about_us,email" --force

# php artisan create:scaffold Clinic --translation-for=en,fr --with-migration --with-soft-delete  --with-form-request --# ontroller-name=ClinicController --template-name=super2 --force



# Main commands
php artisan create:layout [application-name]
php artisan create:resources [model-name]
php artisan create:controller [model-name]
php artisan create:model [model-name]
php artisan create:form-request [model-name]
php artisan create:routes [model-name]
php artisan create:migration [model-name]
php artisan create:language [model-name]
php artisan create:mapped-resources
# Views commands
php artisan create:views [model-name]
php artisan create:index-view [model-name]
php artisan create:create-view [model-name]
php artisan create:edit-view [model-name]
php artisan create:show-view [model-name]
php artisan create:form-view [model-name]
# Resource's files commands
php artisan resource-file:from-database [model-name]
php artisan resource-file:create [model-name]
php artisan resource-file:append [model-name]
php artisan resource-file:reduce [model-name]
php artisan resource-file:delete [model-name]
# Migration commands
php artisan migrate-all
php artisan migrate:rollback-all
php artisan migrate:reset-all
php artisan migrate:refresh-all
php artisan migrate:status-all

