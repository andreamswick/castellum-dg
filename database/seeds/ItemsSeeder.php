<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    public $items = [
        ['title' => 'Dishes', 'description' => 'Number depends on family.', 'priority' => 'high'],
        ['title' => 'Silverware', 'description' => 'Number depends on family.', 'priority' => 'high'],
        ['title' => 'Steak knives', 'description' => 'Number depends on family.', 'priority' => 'high'],
        ['title' => 'Drinking glasses', 'description' => 'Number depends on family.', 'priority' => 'high'],
        ['title' => 'Silverware divider', 'description' => '', 'priority' => 'high'],
        ['title' => 'Coffee mugs and saucers', 'description' => 'Number depends on family.', 'priority' => 'high'],
        ['title' => 'Set of mixing bowls', 'description' => '', 'priority' => 'high'],
        ['title' => 'Set of pots and pans', 'description' => '', 'priority' => 'high'],
        ['title' => 'Set of baking pans', 'description' => '', 'priority' => 'high'],
        ['title' => 'Serving bowls and dishes', 'description' => '', 'priority' => 'high'],
        ['title' => 'Set of cooking utensils, including measuring cups and spoons', 'description' => '', 'priority' => 'high'],
        ['title' => 'Chef’s knife and paring knife', 'description' => '', 'priority' => 'high'],
        ['title' => 'Cutting board', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Tea pot', 'description' => '', 'priority' => 'high'],
        ['title' => 'Can/bottle opener', 'description' => '', 'priority' => 'high'],
        ['title' => 'Colander', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => '4 small plastic food storage containers', 'description' => '', 'priority' => 'high'],
        ['title' => '4 large plastic food storage containers', 'description' => '', 'priority' => 'high'],
        ['title' => 'Potholders', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => '2 sets of kitchen towels', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Dish washing soap', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Dish drying-rack with tray', 'description' => '', 'priority' => 'high'],
        ['title' => 'Paper towels (minimum 2 rolls)', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Large kitchen garbage can (w/ lid)', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Large garbage bags', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Broom with dust pan', 'description' => '', 'priority' => 'high'],
        ['title' => 'Mop and bucket', 'description' => '', 'priority' => 'high'],
        ['title' => 'All purpose spray cleaner w/bleach', 'description' => '', 'priority' => 'high'],
        ['title' => 'Scouring cleanser', 'description' => '', 'priority' => 'high'],
        ['title' => 'Scouring pads and sponges', 'description' => '', 'priority' => 'high'],
        ['title' => 'Matches or lighter', 'description' => '', 'priority' => 'high'],
        ['title' => 'Blankets', 'description' => 'Number depends on family.', 'priority' => 'high'],
        ['title' => 'Comforters', 'description' => 'Number depends on family.', 'priority' => 'high'],
        ['title' => 'Baby blanket (if necessary)', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Sets of sheets including pillow cases', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Pillows', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => '40 hangers', 'description' => '', 'priority' => 'high'],
        ['title' => 'Alarm clock', 'description' => '', 'priority' => 'high'],
        ['title' => 'Laundry soap', 'description' => '', 'priority' => 'high'],
        ['title' => 'Laundry basket', 'description' => '', 'priority' => 'high'],
        ['title' => 'Towel sets (bath/hand/wash)', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Shower curtain w/hooks', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Several bars of hand/body soap', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Shampoo', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Deodorant', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Toothbrushes', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Toothpaste', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Dental floss', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Disposable razors', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Shaving cream/lotion', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Feminine supplies', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'Toilet paper and facial tissue', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'First aid kit and oral thermometer', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Waste basket', 'description' => '', 'priority' => 'high'],
        ['title' => 'Disposable diapers (if necessary)', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high'],
        ['title' => 'All purpose spray cleaner w/bleach', 'description' => '', 'priority' => 'high'],
        ['title' => 'Scouring cleanser, pads, sponges', 'description' => '', 'priority' => 'high'],
        ['title' => 'Plunger', 'description' => '', 'priority' => 'high'],
        ['title' => 'Toilet brush', 'description' => '', 'priority' => 'high'],
        ['title' => 'Bed frames', 'description' => '', 'priority' => 'high'],
        ['title' => 'NEW/Never used box springs and mattresses', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Chest of drawers for clothing', 'description' => '', 'priority' => 'high'],
        ['title' => 'Kitchen/dining table and chairs', 'description' => '', 'priority' => 'high'],
        ['title' => 'Sofa', 'description' => '', 'priority' => 'high'],
        ['title' => 'Armchairs', 'description' => '', 'priority' => 'high'],
        ['title' => 'Coffee tables', 'description' => '', 'priority' => 'high'],
        ['title' => 'Lamps', 'description' => '', 'priority' => 'high'],
        ['title' => '40 and 60 Watt light bulbs', 'description' => '', 'priority' => 'high'],
        ['title' => 'Calendar', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Fire Extinguisher', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Portable shopping cart', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Iron and ironing Board', 'description' => '', 'priority' => 'high'],
        ['title' => 'Pads of paper/notebooks/pens/pencils', 'description' => '', 'priority' => 'high'],
        ['title' => 'Postage stamps', 'description' => '', 'priority' => 'high'],
        ['title' => 'Bilingual dictionary', 'description' => '', 'priority' => 'high'],
        ['title' => 'Toys, children’s books, stuffed animals', 'description' => '', 'priority' => 'high'],
        ['title' => 'AA,AAA & 9 Volt Batteries', 'description' => 'Should be new.', 'priority' => 'high'],
        ['title' => 'Window Fans', 'description' => '', 'priority' => 'high'],
        ['title' => 'Vacuum cleaner or carpet sweeper', 'description' => '', 'priority' => 'high'],
        ['title' => 'T.V. with digital converter box', 'description' => '', 'priority' => 'high'],
        ['title' => 'Radio/CD player', 'description' => '', 'priority' => 'high'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->items as $item) {
            Item::create($item);
        }
    }
}
