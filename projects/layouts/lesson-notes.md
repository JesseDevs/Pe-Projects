# Layout Notes:

- Skitch out the layout. See the module and visualize the boxes inside it.

- Gotta check it at all sizes to make sure it would work with the set number of boxes.
- Layout 1 flex box wouldn’t be able to get it done perfectly like the image. Would need to box two other boxes to achieve the same structure.
- Typography classes make adjusting the size of things simple and quick!
- Question: When is it best to use gap vs. padding/ margin.
- To answer my own question, if I’m going to have margin or padding that I will be removing in bigger screens then maybe its better to use gap.
- Flex box is flexible… which can be kinda bad for images. Grid is strict.
- Using Grid to equally separate items is a great way to create rows with your elements (boxes). Display grid. Gap.
- 700 is a good default breakpoint.🤔
- GRID-TEMPLATE-COLUMNS!!
- 1fr 1fr. This breaks it into 2 different fractions. Like 50/ 50 columns.
- If align isn’t set it will be stretch by default which will stretch the boxes to fit inside the set space. Align-self. Aligns only itself to the parent, not all the items in the parent.
- CSS file organization! Whatever you want.., if it works. Lol
- Grid is a two dimensional layout system. Flex box is a one dimensional.
- DEFINE GRID - Now tell things where to be :
- GRID-COLUMN: This helps it decide what column it will be in. ex. Span 1.
-  1 / 2. Defines what position in the column.looks like : |1.   |2.   |3.We want he box to take space from 1 to 2.And the image 2 to 3… so 2 / 3.
- GRID-ROW: to pick the row it starts with.
