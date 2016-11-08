<?php

use App\VolunteerCategories;
use Illuminate\Database\Seeder;

class VolunteerCategoriesSeeder extends Seeder
{
    private $volunteer_categories = [
        ['name' => 'Finances', 'description' => 'We estimate that it costs an average of $8,000 to help resettle a refugee family of four. Set a goal for your group and if need be, consider partnering with neighboring congregations, community groups, businesses, and individuals to reach and surpass this goal. You certainly do not have to commit to raising $8,000 but every dollar designated for resettlement will directly benefit one or more refugee families that are moving to Chicago.'],
        ['name' => 'Housing', 'description' => 'RefugeeOne staff finds and secures apartments for every refugee that resettles in Chicago. We have working relationships with several landlords and property management companies throughout the city and suburbs. In most cases housing is located near RefugeeOne offices to allow refugees easy access to our programs and services. You and your team can assist by working with our Housing Coordinator to help furnish the apartment and secure specific household items needed for a newly arriving family. A complete list of items can be found in this packet.'],
        ['name' => 'Moving', 'description' => 'Once you have collected all the necessary furniture and household items it’s time to set up the apartment for the family. You may need several volunteers to help on “moving day.” You may also need to rent a small moving truck or cargo van to move furniture, etc. The apartment should be fully furnished and organized before the family arrives so they have a comfortable home to rest in once they are here. The apartment should be sufficiently stocked with food items so they don’t have to worry about shopping for the first week.'],
        ['name' => 'Welcoming', 'description' => 'Organize a group of people to join RefugeeOne staff in welcoming the refugees at the airport and transporting them to their new home. The arrival of the family can be a profoundly moving experience for your group as well as the refugees. Feel free to make a welcome sign and bring balloons or flowers.'],
        ['name' => 'Transportation', 'description' => 'Organize a group of people that are willing to provide transportation for the family in their first weeks after arrival (if necessary). This could include trips to the market or clothing stores or to the RefugeeOne offices for the family’s initial intake with their assigned case manager.'],
        ['name' => 'Visiting', 'description' => 'Visit the family about once a week during the first 90 days to make sure they are doing well. Give reports to the RefugeeOne case manager. Help to orient them to their new neighborhood. Show them the nearest grocery store, affordable clothing stores, tutor them in English, introduce them to public transportation, and the many enjoyable aspects of Chicago.'],
        ['name' => 'Tutoring', 'description' => 'RefugeeOne provides English as a Second Language (ESL) classes at our offices. Newly arrived refugees attend ESL classes 16 hours per week. Additional tutoring from your group will strengthen these classes and assist the refugees in learning conversational English.'],
        ['name' => 'Employment', 'description' => 'An important step toward self-sufficiency for newly arrived refugees is employment. RefugeeOne provides job readiness and job development training to help refugees find suitable work. If you have any contacts at businesses that are able to hire please let your RefugeeOne contact know.'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->volunteer_categories as $category) {
            VolunteerCategories::create($category);
        }
    }
}
