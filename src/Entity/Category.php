<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $name;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(type="string", length=120)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="subCategories")
     */
    private $parent;

    /**
     * @ORM\OneToMany(targetEntity=Category::class, mappedBy="parent")
     */
    private $subCategories;

    /**
     * @ORM\OneToMany(targetEntity=Post::class, mappedBy="category")
     */
    private $posts;

    public function __construct()
    {
        $this->subCategories = new ArrayCollection();
        $this->posts = new ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function getParent(): ?self
    {
        return $this->parent;
    }

    public function setParent(?self $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getSubCategories(): Collection
    {
        return $this->subCategories;
    }

    public function addSubCategory(self $subCategory): self
    {
        if (!$this->subCategories->contains($subCategory)) {
            $this->subCategories[] = $subCategory;
            $subCategory->setParent($this);
        }

        return $this;
    }

    public function removeSubCategory(self $subCategory): self
    {
        if ($this->subCategories->removeElement($subCategory)) {
            // set the owning side to null (unless already changed)
            if ($subCategory->getParent() === $this) {
                $subCategory->setParent(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Post[]
     */
    public function getPosts(): Collection
    {
        return $this->posts;
    }

    public function addPost(Post $post): self
    {
        if (!$this->posts->contains($post)) {
            $this->posts[] = $post;
            $post->setCategory($this);
        }

        return $this;
    }

    public function removePost(Post $post): self
    {
        if ($this->posts->removeElement($post)) {
            // set the owning side to null (unless already changed)
            if ($post->getCategory() === $this) {
                $post->setCategory(null);
            }
        }

        return $this;
    }
}
