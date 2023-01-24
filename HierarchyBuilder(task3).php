<?php
/*
Sukurkite klasę HierarchyBuilder, kuri padėtų terminale vizualizuoti hierarchijos modelį.
Pvz.:
* zero (root) level node
    |_ first level node (id 0)
    |_ first level node (id 1)
        |_ second level node (id 0)
        |_ second level node (id 1)
        |_ second level node (id 2)
Metodai:
addRootNode(string $text): void - prideda root node'ą
addNode(string $text, int $parentLevel, int $parentNodeId): void - prideda node'ą tam tikrame lygyje, nurodytam parent'ui
printHierarchy(): void - spausdina hierarchiją į terminalą
removeNode(int $level, int $parentNodeId): void - pašalina tam tikrą node'ą ir jo vaikus
Apribojimai:
- Gali būti tik vienas root lygio node'as.
- Negalima pridėti node'o neegzistuojančiam parent'ui
Kodo kvietimo pavyzdys:
$hierarchyBuilder = new HierarchyBuilder();
$hierarchyBuilder->addRootNode('this is root (zero)');
$hierarchyBuilder->addNode('this is first level', 0, 0);
$hierarchyBuilder->addNode('this is first level again', 0, 0);
$hierarchyBuilder->addNode('this is second level', 1, 1);
$hierarchyBuilder->addNode('this is first level once again', 0, 0);
$hierarchyBuilder->printHierarchy();
$hierarchyBuilder->addNode('this is fifth level', 4, 0); // parent node does not exist
* this is root (zero) // root
    |_ this is first level // parent level
    |_ this is first level again
        |_ this is second level // parent node Id
    |_ this is first level once again
*/

class HierarchyBuilder {
    private array $list;
    public function __construct(array $arr) {
        $this->list = $arr;
    }
    public function addRootNode(string $text):void {

    }
    public function addNode(string $text, int $parentLevel, int $parentNodeId):void {
        foreach ($this->list as $key=>$item) {
            $this->list[$key]->$parentLevel;
            $item->$parentNodeId;
            $text.$parentLevel.$parentNodeId;
        }
    }
    public function printHierarchy():void {
        $this->addNode();
}
    public function removeNode(int $level, int $parentNodeId):void {

    }
}