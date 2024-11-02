<?php
include_once './AutoLoaded.php';

class PrintLevelOrderTraversalLineByLine
{
    public static function printLevel(LinkedListQueue $queue, NodeOfBinaryTree $node, $level)
    {
        if ($node == null) {
            return; // لا حاجة لإعادة مصفوفة فارغة
        }

        if ($level == 1) {
            echo $node->data . " "; // إضافة مسافة لزيادة الوضوح
            Enqueue::addNewNodeAtRear($queue, new NodeQueue($node->data));
        } else {
            // استدعاء الدالة على الأبناء
            if ($node->left != null) {
                self::printLevel($queue, $node->left, $level - 1);
            }

            if ($node->right != null) {
                self::printLevel($queue, $node->right, $level - 1);
            }
        }
    }
    public static function height(?NodeOfBinaryTree $root) // استخدام ? للإشارة إلى أنه يمكن أن يكون null
    {
        if ($root == null) {
            return 0; // إعادة 0 إذا كان الجذر فارغًا
        }
        // احسب ارتفاع الشجرة عن طريق أخذ الارتفاع الأقصى بين اليسار واليمين
        $leftHeight = self::height($root->left);
        $rightHeight = self::height($root->right);
        return max($leftHeight, $rightHeight) + 1; // إضافة 1 للجذر
    }

    public static function levelOrderTraversal(LinkedListQueue $queue, BinaryTree $tree)
    {
        if ($tree->Root == null) {
            echo "الشجرة فارغة.";
            return; // إذا كانت الشجرة فارغة، لا تفعل شيئًا
        }

        $h = self::height($tree->Root);
        for ($i = 1; $i <= $h; $i++) { // استخدم <= لتشمل المستوى الأخير
            self::printLevel($queue, $tree->Root, $i);
            echo "<br>";
        }
    }
}

?>