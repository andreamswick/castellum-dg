<?php

use App\Item;
use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    public $items = [
        ['title' => 'Dishes', 'description' => 'Number depends on family.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Silverware', 'description' => 'Number depends on family.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Steak knives', 'description' => 'Number depends on family.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Drinking glasses', 'description' => 'Number depends on family.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Silverware divider', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Coffee mugs and saucers', 'description' => 'Number depends on family.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Set of mixing bowls', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Set of pots and pans', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Set of baking pans', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Serving bowls and dishes', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Set of cooking utensils, including measuring cups and spoons', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Chef’s knife and paring knife', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Cutting board', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Tea pot', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Can/bottle opener', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Colander', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => '4 small plastic food storage containers', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => '4 large plastic food storage containers', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Potholders', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => '2 sets of kitchen towels', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Dish washing soap', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Dish drying-rack with tray', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Paper towels (minimum 2 rolls)', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Large kitchen garbage can (w/ lid)', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Large garbage bags', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Broom with dust pan', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Mop and bucket', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'All purpose spray cleaner w/bleach', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Scouring cleanser', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Scouring pads and sponges', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Matches or lighter', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Blankets', 'description' => 'Number depends on family.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Comforters', 'description' => 'Number depends on family.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Baby blanket (if necessary)', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Sets of sheets including pillow cases', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Pillows', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => '40 hangers', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Alarm clock', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Laundry soap', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Laundry basket', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Towel sets (bath/hand/wash)', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Shower curtain w/hooks', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Several bars of hand/body soap', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Shampoo', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Deodorant', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Toothbrushes', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Toothpaste', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Dental floss', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Disposable razors', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Shaving cream/lotion', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Feminine supplies', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Toilet paper and facial tissue', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'First aid kit and oral thermometer', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Waste basket', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Disposable diapers (if necessary)', 'description' => 'Number depends on family. Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'All purpose spray cleaner w/bleach', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Scouring cleanser, pads, sponges', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Plunger', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Toilet brush', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Bed frames', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'NEW/Never used box springs and mattresses', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Chest of drawers for clothing', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Kitchen/dining table and chairs', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Sofa', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Armchairs', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Coffee tables', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Lamps', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => '40 and 60 Watt light bulbs', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Calendar', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Fire Extinguisher', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Portable shopping cart', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Iron and ironing Board', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Pads of paper/notebooks/pens/pencils', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Postage stamps', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Bilingual dictionary', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Toys, children’s books, stuffed animals', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'AA,AAA & 9 Volt Batteries', 'description' => 'Should be new.', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Window Fans', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Vacuum cleaner or carpet sweeper', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'T.V. with digital converter box', 'description' => '', 'priority' => 'high', 'quantity' => 1],
        ['title' => 'Radio/CD player', 'description' => '', 'priority' => 'high', 'quantity' => 1],
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
